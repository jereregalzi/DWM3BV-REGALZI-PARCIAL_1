<?php
    // Realizar la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "Simba2013";  
    $dbname = "parcial-2";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consultar los productos en la base de datos
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    echo '<div class="container text-center" id="productos">';
    echo '<div class="row justify-content-center">';
    // Generar el código HTML para mostrar los productos
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

        echo '<div class="col-12 col-sm-4 col-md-3 shadow py-3 px-3 my-3 mx-2 rounded">';
        echo '<div class="">';
        echo '<figure class="img-producto">';
        echo '<img src="../img/' . $row["imagen"] . '" class="card-img-top img-fluid rounded" alt="' . $row["nombre"] . '"/>';  
        echo '</figure>';
        echo '<h3 class="card-title">' . $row["nombre"] . '</h3>';
        echo '<p class="card-text">' . $row["descripcion"] . '</p>';
        echo '<p class="card-text"><strong>Precio:</strong> $' . $row["precio"] . '</p>';
        
        
        /* echo '<p><a class="col" href="detalle-producto.php?id=' . $row["id"] . '">Ver detalle</a></p>'; */
        echo '<button id="add" type="button" class="btn btn-primary">Agregar</button>';
        echo '</div>';
        echo '</div>';
        }
    } else {
        echo "No se encontraron productos";
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>