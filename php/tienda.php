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

<body>
  
  <?php
    include 'nav.php';
    ?>

<section id="catalogo" class="container-fluid my-5">
  <h1 class="text-center py-4 display-4"><a id="tienda">Tienda</a></h1>
  
  <?php
    include 'productos.php';
  ?>      
                         
</section>
            

  <?php
    include 'footer.php';
  ?>

  </body>

</html>