<!-- Archivo enviar-correo.php -->
<?php
if (isset($_POST["submit"])) {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
  $to = "davrdguez@gmail.com";
  $subject = "Nuevo mensaje desde el formulario de contacto";
  $message = "Nombre: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Mensaje: " . $mensaje;
  $headers = "From: " . $email;
  
  if (mail($to, $subject, $message, $headers)) {
    echo "¡Mensaje enviado con éxito!";
  } else {
    echo "Error al enviar el mensaje, por favor inténtalo de nuevo.";
  }
}
?>
