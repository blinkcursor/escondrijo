(function($) {
    "use strict";

    $(function() {

        // Set up ajax form handling via formspree.io

        $('#request').submit(function(event){
            var formData = $(this).serialize();
            console.log("formData = " + formData);
            $.ajax({
                url: "//formspree.io/nigel.m.anderson@gmail.com",
                method: "POST",
                data: formData,
                dataType: "json"
            }).done(function(data) {
                console.log("data = " + data);
                if (data.success) {
                    $('#request').append('<div class="alert-box success">Yes ' + data.message + '</div>');
                }
            });
            event.preventDefault();
        });

        // Add 'home' link for logo back (appears to be quashed by Foundation on small screens)
        $("nav.top-bar > a").click(function(){
            window.location.href='http://escondrijo.com';
            return false;
        })

        // Foundation JavaScript
        // Documentation can be found at: http://foundation.zurb.com/docs
        $(document).foundation();

        $(".toggle-topbar > a").on("click", function() {
            if ( $("nav.top-bar").hasClass("expanded") )
            {
                $("html, body").animate( {scrollTop: 0}, '200' );
            }
            else
            {
                $("html, body").animate( {scrollTop: 45}, '200' );
            }
        });

        //A fixed header that will animate its size on scroll.
        //The inner elements will also adjust their size with a transition.
        var pageHeader = (function() {

            var docElem = document.documentElement,
            header = $('body > header'),
            topBarLinks = header.find('.top-bar-links'),
            didScroll = false,
            changeHeaderOn = topBarLinks.height();

            function initPageHeader() {
                window.addEventListener('scroll', function(event) {
                    if (!didScroll) {
                        didScroll = true;
                        setTimeout(scrollPage, 10);
                    }
                }, false);
            }

            function scrollPage() {
                var sy = scrollY();
                if (sy > changeHeaderOn)
                    sy = changeHeaderOn;
                header.css('top', (-10 - sy) + 'px');
                if (sy == changeHeaderOn) 
                {
                    topBarLinks.addClass('minimized');
                    header.addClass('minimized');
                }
                else
                {
                    topBarLinks.removeClass('minimized');
                    header.removeClass('minimized');
                }
                didScroll = false;
            }

            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }

            initPageHeader();

            $(".accordion dd").on("click", "a:eq(0)", function(event)
            {
                var dd_parent = $(this).parent();

                if (dd_parent.find('div.content').hasClass('active'))
                    $(".accordion dd div.content:visible").slideToggle("normal");
                else
                {
                    $(".accordion dd div.content:visible").slideToggle("normal");
                    $(this).parent().find(".content").slideToggle("normal");
                }
            });

        })();



    });

}(jQuery));