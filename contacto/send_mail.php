<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "sergiman03@gmial.com"; // Dirección de correo del destinatario
    $subject = "Nuevo mensaje de " . $name;
    $body = "Has recibido un nuevo mensaje de " . $name . " (" . $email . "):\n\n" . $message;
    $headers = "From: $email\r\n"; // Dirección de correo del remitente
    if (mail($to, $subject, $body, $headers)) {
        echo "Tu mensaje ha sido enviado con éxito.";
    } else {
        echo "Ha habido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    echo "Por favor, completa todos los campos del formulario.";
}
?>
