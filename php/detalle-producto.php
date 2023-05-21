<?php
$productos_json = file_get_contents('../data/productos.json');
$productos = json_decode($productos_json, true);

if ($productos === null) {
    die("Error al decodificar el archivo JSON de productos.");
}

// Verificar si se proporcionó el parámetro ID en la URL
if (!isset($_GET['id'])) {
    die("ID de producto no especificado.");
}

$producto_id = $_GET['id'];

// Buscar el producto correspondiente al ID proporcionado
$producto_encontrado = null;
foreach ($productos as $producto) {
    if ($producto['id'] == $producto_id) {
        $producto_encontrado = $producto;
        break;
    }
}

// Verificar si se encontró el producto
if ($producto_encontrado === null) {
    die("Producto no encontrado.");
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../styles.css" />
    <title>Detalle del Producto</title>
</head>
<body>
    
  <?php
    include 'nav.php';
  ?>

<div class="container p-5 m-5">
    
    <div class="row">
        <h1><?php echo $producto_encontrado["nombre"]; ?></h1>
        <figure class="col-10 col-sm-5">
            <img class="img-fluid rounded " src="../img/<?php echo $producto_encontrado["imagen"]; ?>" alt="<?php echo $producto_encontrado["nombre"]; ?>">
        </figure>
        <div class="col-10 col-sm-5"> 
            <p><strong>Descripción:</strong> <?php echo $producto_encontrado["descripcion"]; ?></p>
            <p><strong>Precio:</strong> $<?php echo $producto_encontrado["precio"]; ?></p>
            <p><strong>Stock:</strong> <?php echo $producto_encontrado["stock"]; ?></p>
            <button class="btn btn-primary m-3">Comprar</button>            
        </div>
    </div>
</div>

                <h2 class="text-center">Ver mas productos</h2>
                <?php
        include 'productos.php';
        include 'footer.php'
        ?>
        
        
</body>
</html>
