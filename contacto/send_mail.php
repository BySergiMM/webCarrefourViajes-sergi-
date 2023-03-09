<?php
if(isset($_POST['submit'])){
    $to = "vnalandasb@gmail.com"; // Cambie la dirección de correo electrónico aquí
    $from = $_POST['email']; // El remitente del correo electrónico es el correo electrónico del formulario.
    $name = $_POST['name'];
    $subject = "Formulario de contacto de Nalanda"; // El asunto del correo electrónico
    $message = $name . " escribió: " . "\n\n" . $_POST['message']; // El mensaje del correo electrónico

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
}
?>