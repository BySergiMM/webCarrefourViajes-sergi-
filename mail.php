<?php
    // Revisa si se envió el formulario
    if (isset($_POST['submit'])) {
        // Recoge los datos del formulario
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Dirección de correo a la que se enviará el mensaje
        $to = "vnalandasb@gmail.com";

        // Cabeceras del correo electrónico
        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

        // Mensaje a enviar
        $email_body = "
            <h2>Nuevo mensaje del formulario de contacto:</h2>
            <p><strong>Nombre:</strong> $name</p>
            <p><strong>Correo electrónico:</strong> $email</p>
            <p><strong>Asunto:</strong> $subject</p>
            <p><strong>Mensaje:</strong></p>
            <p>$message</p>
        ";

        // Envía el mensaje de correo electrónico
        if (mail($to, $subject, $email_body, $headers)) {
            header('Location: contacto.html?mensaje=Mensaje enviado correctamente');

        } else {
            header('Location: contacto.html?mensaje=Error al enviar el mensaje');
        }
    }
?>