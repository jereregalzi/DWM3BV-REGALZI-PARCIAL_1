<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../styles.css" />
    <title>Contacto</title>
</head>
<body>
    <?php
        include 'nav.php';
        ?>
<div class="container p-5 m-5 d-flex justify-content-center nosotros">
    
    <div class="row">
        <h1 class="text-center ">Contacto</h1>
    <form method="POST" action="procesar_contacto.php">
    
    <div class="col-10 col-sm-6 mb-3">
        <label for="nombre">Nombre:</label>
        <input class="rounded" type="text" id="nombre" name="nombre" required><br><br>
    </div>


    <div class="col-10 col-sm-6 mb-3">
        <label for="email">Email:</label>
        <input class="rounded" type="email" id="email" name="email" required><br><br>
    </div>
        
    <div class="col-10 col-sm-6 mb-3">   
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>
    </div>
        
        <input class="rounded" type="submit" value="Enviar">
    </form>
</div>
</div>

    <?php
        include 'footer.php';
    ?>
</body>
</html>