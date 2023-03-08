<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $success_message = "";
    $error_message = "";

    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "Por favor, completa todos los campos del formulario.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Por favor, introduce una dirección de correo electrónico válida.";
    } else {
        $to = "vnalandasb@gmail.com";
        $subject = "Mensaje de la web de, " . $name;
        $body = "Has recibido un nuevo mensaje de " . $name . " (" . $email . "):\n\n" . $message;
        $headers = "From: $email\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $success_message = "Tu mensaje ha sido enviado con éxito.";
        } else {
            $error_message = "Ha habido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
        }
    }
}
?>