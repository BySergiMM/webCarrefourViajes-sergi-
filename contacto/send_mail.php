<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "vnalandasb@gmail.com";
        $from = "viajesnalanda.es";

        $headers = "From: $from <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $email_body = "<p>Email: $email</p><p>Nombre: $name</p><p>Mensaje: $message</p>";

        if (mail($to, $subject, $email_body, $headers)) {
            header('Location: contacto.html?mensaje=Mensaje enviado correctamente&color=green');
        } else {
            header('Location: contacto.html?mensaje=Error al enviar el mensaje&color=red');
        }
    }
?>
