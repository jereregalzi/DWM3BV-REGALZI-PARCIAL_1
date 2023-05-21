<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../styles.css" />
    <title>Datos del alumno</title>
</head>
<body>

<?php
    include 'nav.php';
?>
<div class="container my-5 py-5 nosotros">
    <div class="row justify-content-center">

        <div class="card shadow" style="width: 18rem;">
            <figure class="py-2">
                <img src="../img/foto-data.jpg" class="card-img-top" alt="...">
            </figure>
                
            <div class="card-body">
                <h1 class="card-title bs-3">Jeremias Regalzi</h1>
                
                    <p>Edad: 20 años</p>
                    <p>Correo Electronico: jeremias.regalzi@davinci.edu.ar</p>
                    <div class="text-center">
                        <p>Redes Sociales</p>
                        <a href="#https://www.instagram.com/jereregalzi/?hl=en" class="p-3 fs-4"><i class="bi bi-instagram"></i></a>
                        <a href="#https://github.com/jereregalzi" class="p-3 fs-4"><i class="bi bi-github"></i></a>
                    </div>
                
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
</body>
</html>