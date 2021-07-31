<?php
$name = $_POST['name'];
$phone = $_POST['phoneNumber'];
$mail = $_POST['email'];
$servicio = $_POST['tipo-asunto'];
$message = $_POST['textarea'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Asunto: " . $servicio . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'infoencodeit@gmail.com';
$asunto = 'INFO WEB LIMPIEZA MACARENA';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:form.html");
?>
