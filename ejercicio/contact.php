<?php 
	$para = 'info@jotajotavm.com, ohsoniadesing@gmail.com';
	$asunto = "Mensaje desde jojajotavm.com";
	$mailheader = "From: " .$_POST["email"]."\r\n"
	$mailheader = "Reply-To: " .$_POST["email"]."\r\n"
	$mailheader = "Content-Type text/html; charset=utf-8\r\n"
	$MESSAGE_BODY = "Nombre: " .$_POST["name"]."\n"
	$MESSAGE_BODY = "\n<br>Email: " .$_POST["email"]."\n"
	$MESSAGE_BODY = "\n<br>Mesaje: " .nl2br($_POST["message"])."\n"

	mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("Error al enviar email!");
	header('location: http://jotajotavm.com/sonia');
 ?>