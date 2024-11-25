<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "moldurassinu@gmail.com"; 
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo Electrónico: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
