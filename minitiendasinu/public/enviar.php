<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer:  PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "Content-Type: text/plain";
$message = "Este mensaje fue enviado por: ". $name ."  \r\n";
$message .= "Su correo es: " . $mail . "\r\n";
$message .= "Su telefono es: " . $phone . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . "\r\n";
$message .= "Enviado el:" . date('d/m/Y', time());

$para = 'moldurassinu@gmail.com';
$asunto = 'Contacto desde mi sitio web';

mail($para, $asunto, mb_convert_encoding($message, 'ISO-8859-1', 'UTF-8'), $header);

header("location:index.php");
?>



