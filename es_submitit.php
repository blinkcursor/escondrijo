<?php
	$formVariable = $_POST['formVariable'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$lead = $_POST['lead'];

 $toaddress = "info@escondrijo.com";
 $subject = "escondrijo solicita: ".$name;
 $mailcontent = "Esta solicita ha sido enviado a escondrijo:\n"
 				."NOMBRE:\n".$name."\n"
				."EMAIL:\n".$email."\n"
				."PREFERENCIAS:\n".$comments."\n"
				."COMO DESCUBRISTES ESCONDRIJO:\n".$lead."\n\n\n"
				."Te contactaremos pronto.\nSi hay cualquier error, por favor informanos a info@escondrijo.com";
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
					<a class="top-bar-social last" href="booking.html"><span class="lang--text__es"></span><span class="lang--icon icon-earth"></span></a>
				</div>
				<div class="left animated fadeInLeft">
					<span class="top-bar-message">Tranquilo. Nos has encontrado.</span>
				</div>
			</div>
		</div>
		<!-- Starting the Top-Bar -->
		<nav class="top-bar" data-topbar data-options="back_text:< atrás">
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
						<a href="#" class="js-noclick">el alojamiento</a>
						<ul class="dropdown">
							<li class="divider"></li>
							<li>
								<a href="es_stay-top.html">la habitaci&oacute;n superior</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="es_stay-hammock.html">la habitaci&oacute;n hamaca</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="es_stay-house.html">la casa</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="es_vejer-de-la-frontera.html">el entorno</a>
							</li>
						</ul>
					</li>
					<li class="divider"></li>
					<li>
						<a href="es_reviews.html">cr&iacute;ticas</a>
					</li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#">info</a>
						<ul class="dropdown">
							<li>
								<a href="es_travel.html">viajes</a>
							</li>
							<li>
								<a href="es_activities.html">actividades</a>
							</li>

						</ul>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">reservas</a>
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
						<h4>Temporada baja</h4>
						<h2>&euro;85</h2>
						<br>
						<h4>Temporada alta*</h4>
						<h2>&euro;99</h2>
						<p>* 15 mayo hasta 30 septiembre y Semana Santa</p>
						<br>
						<p>Precios por habitaci&oacute;n por noche, regimen sola habitaci&oacute;n</p>
						<p>Un dep&oacute;sito de 25% (o coste de la primera noche como m&iacute;nimo) es requirido para asegurar la reserva.</p>
						<p>Vea abajo para pol&iacute;ticas y condiciones.</p>
					</div>
				</div>
				<div class="columns large-6 medium-6">
					<div class="prices">
						<h3>Gracias!</h3>
						<p>Se envia tu solicita y te contactaremos pronto.</p>
						<p>Una copia ha sido enviado a tu direccion: <?php echo $email ?>.</p>
						<p>Contestamos a todos las solicitas. Si no recibas una respuesta, comprueba tu carpeta de SPAM.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="columns large-6 medium-6">
					<div class="prices">
						<p>Devolvemos el dep&oacute;sito cuando podemos rellenar la habitaci&oacute;n &oacute; con por lo menos un mes de antelaci&oacute;n. Con menos de 48 horas podemos sacar hasta el precio de la estancia completa.</p>
						<p>Solo aceptamos animales de compa&ntilde;&iacute;a con acuerdo previo.</p>
						<p>Por respeto a los no fumadores, no se puede fumar dentro de la casa, pero es permitido en los terrazas.</p>
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