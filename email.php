<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["message"];

    $destinatario = "gtutos3@gmail.com";

    $asunto = "Nuevo mensaje de contacto de $nombre $apellido";
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Apellido: $apellido\n";
    $cuerpoMensaje .= "Correo Electrónico: $correo\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Muestra un mensaje de alerta al usuario
    echo "<script>alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');</script>";
}
?>
