<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "gtutos3@gmail.com"; // Cambia esto al correo al que deseas enviar los datos
    $asunto = "Mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Telefono: $phone\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    echo "Mensaje enviado correctamente. Gracias por contactarnos.";
} else {
    echo "Ha ocurrido un error. Por favor, intenta de nuevo más tarde.";
}
?>