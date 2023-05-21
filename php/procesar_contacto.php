<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../styles.css" />
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" defer></script>
  <title>RC Shoes</title>
</head>

<?php

    include 'nav.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados desde el formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes realizar las acciones necesarias con los datos recibidos, como enviar un correo electrónico, almacenarlos en una base de datos, etc.

    // Mostrar un resumen de los datos enviados
    echo '<div class="container p-5 m-5">';
    echo "<h1>Resumen del mensaje enviado:</h1>";
    echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
    echo '</div>';
} else {
    // Si no se recibió una solicitud POST, redireccionar a la página de contacto
    header("Location: contacto.php");
    exit();
}

include 'footer.php';

?>
