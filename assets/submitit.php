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
<script type="text/javascript">
	alert('Thank you. Your request has been sent. If you do not receive a copy please check your spam folder.');
	window.location.replace("http://escondrijo.com");
</script>