<?php
	$formVariable = $_POST['formVariable'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$lead = $_POST['lead'];

 $toaddress = "info@escondrijo.com";
 $subject = "escondrijo request: ".$name;
 $mailcontent = "The following booking request has been sent to escondrijo:\n"
 				."NAME:\n".$name."\n"
				."EMAIL:\n".$email."\n"
				."REQUEST DETAILS:\n".$comments."\n"
				."HOW ESCONDRIJO KNOWN:\n".$lead."\n\n\n"
				."We will be in contact with you shortly\nIf this request has been made in error, please notify info@escondrijo.com";
 $additional_headers = "From: webserver@escondrijo.com\n"
 						."Reply-To: info@escondrijo.com\n"
						."cc: ".$email;
 if (!strpos($comments,"href=")) mail($toaddress, $subject, $mailcontent, $additional_headers);
?>
<!doctype html>
<html class="no-js" lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel='stylesheet' href="css/icomoon.css" type='text/css' media='all' />
	<link rel='stylesheet' href='css/foundation.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/styles.css' type='text/css' media='all' />
	<link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/galleria/1.3.5/galleria.min.js'></script>
	<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.1/modernizr.min.js'></script>
	<title>escondrijo | boutique accommodation in Vejer de la Frontera</title>
</head>
<body class="antialiased">
	<header class="contain-to-grid">
		<div class="top-bar-links">
			<div class="row">
				<div class="right animated fadeInRight">
					<a class="top-bar-social last" href="#"><span class="lang--text"></span><span class="lang--icon icon-earth"></span></a>
				</div>
				<div class="left animated fadeInLeft">
					<span class="top-bar-message">Relax. You've found us.</span>
				</div>
			</div>
		</div>
		<!-- Starting the Top-Bar -->
		<nav class="top-bar" data-topbar data-options="back_text:< back">
			<a class="logo animated fadeIn" href="http://escondrijo.com/" title="escondrijo home" rel="home">
				<img src="img/escondrijo_vector.svg" onerror="this.onerror=null; this.src='img/escondrijo_logo.png'">
			</a>
			<ul class="title-area">
				<li class="name"></li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#" class="js-noclick">stay</a>
						<ul class="dropdown">
							<li class="divider"></li>
							<li>
								<a href="stay-top.html">top room</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="stay-hammock.html">hammock room</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="stay-house.html">the house</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">the location</a>
							</li>
						</ul>
					</li>
					<li class="divider"></li>
					<li>
						<a href="reviews.html">reviews</a>
					</li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#">info</a>
						<ul class="dropdown">
							<li>
								<a href="travel.html">travel</a>
							</li>
							<li>
								<a href="activities.html">activities</a>
							</li>

						</ul>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">booking</a>
					</li>
					<li class="divider"></li>
				</ul>
			</section>
		</nav>
		<!-- End of Top-Bar -->
	</header>

	<!-- THE CONTENT -->
	<div class="content">
	<!-- cards -->
		<div class="one-page contain-to-grid">
			<div class="row">
				<div class="columns large-6 medium-6">
					<div class="prices">
						<h4>Low season</h4>
						<h2>&euro;85</h2>
						<br>
						<h4>High season*</h4>
						<h2>&euro;99</h2>
						<p>* 15 May to 30 Sep & Easter week</p>
						<br>
						<p>Prices are per room per night, room only.</p>
						<p>25% deposit (minimum cost of first night) required to secure reservation.</p>
						<p>See below for further conditions.</p>
					</div>
				</div>
				<div class="columns large-6 medium-6">
					<div class="prices">
						<h3>Thanks!</h3>
						<p>We've sent a copy of your request to you at <?php echo $email ?> for your records.</p>
						<p>If you don't hear back from us soon, check your spam folder. We always reply.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="columns large-6 medium-6">
					<div class="prices">
						<p>We refund the deposit when we are able to refill the room or when we receive at least one month's notice. Short-notice cancellations (less than 48 hours) will incur full cost of stay. Travel insurance is recommended.<p>
						<p>Children are welcome but the house has open staircases so ask if you are unsure about little ones.</p>
						<p>We have a friendly dog called Duna. Other pets are only by prior arrangement.</p>
						<p>No smoking anywhere inside the building. You can smoke on the terraces.</p>
					</div>
				</div>
			</div>
		</div><!-- .one-page -->
	</div><!-- .content -->

<!-- FOOTER -->
<footer>
	<div class="row">
		<div class="columns large-4 medium-4">
			<ul class="vcard">
				<li class="fn">escondrijo</li>
				<li class="street-address">Callej&oacute;n Oscuro, 3</li>
				<li class="locality">Vejer de la Frontera</li>
				<li><span class="zip">11150</span> - <span class="state">C&aacute;diz</span></li>
				<li class="country">Espa&ntilde;a</li>
				<li class="email"><a href="mailto:info@escondrijo.com">info@escondrijo.com</a></li>
				<li class="url">www.escondrijo.com</li>
				<li></li>
				<li class="phone"><span class="icon-phone"></span>+34 956 44 74 38</li>
				<li class="phone"><span class="icon-mobile"></span>+34 669 95 03 05</li>
				<br>
				<li>GPS (Plaza de Espa&ntilde;a)</li>
				<li>36&deg;15&#39;13.435&quot; N<br>5&deg;57&#39;44.978&quot; W</li>
			</ul>
		</div>
		<div class="columns large-4 medium-4">
			<ul class="soc text-center">
			    <li><a class="soc-twitter icon-twitter" href="http://twitter.com/escondrijo"></a></li>
			    <li><a class="soc-facebook" href="http://facebook.com/escondrijo"></a></li>
			    <li><a class="soc-google" href="https://plus.google.com/111353659892607920559"></a></li>

			</ul>
		</div>
		<div class="columns large-4 medium-4">
			<div class="accred text-center">
				<img src="img/rural100.jpg">
				<div>VR/CA/00265</div>
				<div>Tenette Eleanor Ludlow<br>(X4662257L)</div>
			</div>
		</div>		
	</div>
</footer>
<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js'></script>
<script type='text/javascript' src='js/app.js'></script>
<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/js/foundation.min.js'></script>
<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.0/fastclick.min.js'></script>
<!-- StatCounter Code -->
<script type="text/javascript">
var sc_project=6556413; 
var sc_invisible=1; 
var sc_security="867cca6a"; 
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="counter for tumblr" href="http://statcounter.com/tumblr/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/6556413/0/867cca6a/1/" alt="counter for tumblr" ></a></div></noscript>
<!-- End of StatCounter Code -->
</body>
</html>