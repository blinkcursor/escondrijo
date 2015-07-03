(function($) {
    "use strict";

    $(function() {

        // Set up ajax form handling via formspree.io

        $('#request').submit(function(event){

            event.preventDefault();
            var lang = $('html').attr('lang');

            var msgSuccess = (lang == 'es') ? "Gracias. Nos ponemos en contacto pronto." : "Thank you! We'll be in touch soon.";
            var msgFail = (lang == 'es') ? "Disculpe. Se parece que había una problema. Intenta de nuevo por favor." : "Oops. Something went wrong, please try again.";

            var formData = $(this).serialize();
            $.ajax({
                url: "//formspree.io/info@escondrijo.com",
                method: "POST",
                data: formData,
                dataType: "json"
            }).done(function(data) {
                if (data.success) {
                    $('input[type="submit"]').remove();
                    $('#request').append('<div class="alert-box success">' + msgSuccess + '</div>');
                } else {
                    $('#request').append('<div class="alert-box alert">' + msgFail + '</div>');
                }
            });

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