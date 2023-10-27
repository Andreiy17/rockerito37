<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $sugerencia = $_POST["sugerencia"];
    
    $destinatario = "rockerito37cbtis@gmail.com";  // Cambia esto por tu dirección de correo.

    $asunto = "Nueva sugerencia de $nombre";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo Electrónico: $correo\n";
    $mensaje .= "Sugerencia:\n$sugerencia";

    mail($destinatario, $asunto, $mensaje);

    // Redirige al usuario a una página de agradecimiento u otra ubicación.
    header("Location: ../html/gracias.html");
}
?>
