<?php
    $productos_json = file_get_contents('../data/productos.json');
    $productos = json_decode($productos_json, true);
    
    if ($productos === null) {
        die("Error al decodificar el archivo JSON de productos.");
    }
    
    echo '<div class="container text-center" id="productos">';
    echo '<div class="row justify-content-center">';

    foreach ($productos as $producto) {
        echo '<div class="col-12 col-sm-4 col-md-3 shadow py-3 px-3 my-3 mx-2 rounded">';
        echo '<div class="">';
        echo '<figure class="img-producto">';
        echo '<img src="../img/' . $producto["imagen"] . '" class="card-img-top img-fluid rounded" alt="' . $producto["nombre"] . '"/>';  
        echo '</figure>';
        echo '<h3 class="card-title">' . $producto["nombre"] . '</h3>';
        echo '<p class="card-text">' . $producto["descripcion"] . '</p>';
        echo '<p class="card-text"><strong>Precio:</strong> $' . $producto["precio"] . '</p>';
        echo '<p>Categoría: ' . $producto["cat"] . '</p>';
        echo '<p class="card-text"><strong>Stock:</strong> ' . $producto["stock"] . '</p>';
        echo '<p><a class="col" href="detalle-producto.php?id=' . $producto["id"] . '">Ver detalle</a></p>';
        echo '<button id="add" type="button" class="btn btn-primary">Agregar</button>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';


?>
