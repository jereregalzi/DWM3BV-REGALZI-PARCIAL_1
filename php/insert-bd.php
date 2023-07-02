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

// Agrega tus productos a la base de datos (ejemplo)
    
        /* $categoria_id =  */
        $nombre1 = "Nike Huarache";
        $descripcion1 = "Unisex";
        $precio1 = 50000;
        $imagen1 = "huarache-roja.jpg";

        /* $categoria_id =  */
        $nombre2 = "Air Jordan 1 Retro";
        $descripcion2 = "Unisex, low";
        $precio2 = 50000;
        $imagen2 = "jordan-retro.jpg";

        /* $categoria_id =  */
        $nombre3 = "Air Jordan 1 Toe";
        $descripcion3 = "Unisex, low";
        $precio3 = 50000;
        $imagen3 = "jordan-toe.jpg";

        /* $categoria_id =  */
        $nombre4 = "Air Jordan 1 White" ;
        $descripcion4 = "Unisex, low";
        $precio4 = 50000;
        $imagen4 = "jordan-white.png";
      
        /* $categoria_id =  */
        $nombre5 = "Air Jordan 1 Grey";
        $descripcion5 = "Unisex";
        $precio5 = 50000;
        $imagen5 = "jordan-grey.jpg";
      
        /* $categoria_id =  */
        $nombre6 = "Air Force UV";
        $descripcion6 = "Unisex, edicion limitada, low";
        $precio6 = 50000;
        $imagen6 = "airforce6edit.jpg";
      
        /* $categoria_id =  */
        $nombre7 = "Jordan Flyer";
        $descripcion7 = "Unisex, botita, multicolor";
        $precio7 = 50000;
        $imagen7 = "jordan-flyer.jpg";
      
        /* $categoria_id =  */
        $nombre8 = "Air Max 97";
        $descripcion8 = "Unisex, escala de grises";
        $precio8 = 50000;
        $imagen8 = "max-97.jpg";
      
        /* $categoria_id =  */
        $nombre9 = "SB Dior";
        $descripcion9 = "Unisex, edicion limitada, low";
        $precio9 = 25000;
        $imagen9 = "sb-dior.jpg";
      
        /* $categoria_id =  */;
        $nombre10 = "Air Jordan 1 Brown";
        $descripcion10 = "Unisex, edicion limitada, low";
        $precio10 = 50000;
        $imagen10 = "jordan-brown.jpg";
      
        /* $categoria_id =  */;
        $nombre11 = "Air Jordan 1 Ice";
        $descripcion11 = "Unisex, edicion limitada, low";
        $precio11 = 50000;
        $imagen11 = "jordan-ice.jpg";
      
        /* $categoria_id =  */;
        $nombre12 = "Air Jordan 1 OG";
        $descripcion12 = "Unisex, edicion limitada, low";
        $precio12 = 50000;
        $imagen12 = "sb-dior.jpg";
      
        /* $categoria_id =  */;
        $nombre13 = "Air Force Grey";
        $descripcion13 = "Unisex, edicion limitada";
        $precio13 = 50000;
        $imagen13 = "airforce4.jpg";
      
        /* $categoria_id =  */;
        $nombre14 = "Air Force Color";
        $descripcion14 = "Unisex, edicion limitada";
        $precio14 = 50000;
        $imagen14 = "airforce8edit.jpg";
      
        /* $categoria_id =  */       
        $nombre15 = "Air Jordan 1 StarFish";
        $descripcion15 = "Unisex, edicion limitada";
        $precio15 = 50000;
        $imagen15 = "jordan-starfish.png";
    
// Consulta SQL con sentencia preparada
$sql = "INSERT INTO productos (nombre, precio, descripcion, imagen) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

// Producto 1
$stmt->bind_param("sdsb", $nombre1, $precio1, $descripcion1, $imagen1);


// Producto 2
$stmt->bind_param("sdsb", $nombre2, $precio2, $descripcion2, $imagen2);


// Producto 3
$stmt->bind_param("sdsb", $nombre3, $precio3, $descripcion3, $imagen3);


// Producto 4
$stmt->bind_param("sdsb", $nombre4, $precio4, $descripcion4, $imagen4);


// Producto 5
$stmt->bind_param("sdsb", $nombre5, $precio5, $descripcion5, $imagen5);


// Producto 6
$stmt->bind_param("sdsb", $nombre6, $precio6, $descripcion6, $imagen6);


// Producto 7
$stmt->bind_param("sdsb", $nombre7, $precio7, $descripcion7, $imagen7);


// Producto 8
$stmt->bind_param("sdsb", $nombre8, $precio8, $descripcion8, $imagen8);


// Producto 9
$stmt->bind_param("sdsb", $nombre9, $precio9, $descripcion9, $imagen9);


// Producto 10
$stmt->bind_param("sdsb", $nombre10, $precio10, $descripcion10, $imagen10);


// Producto 11
$stmt->bind_param("sdsb", $nombre11, $precio11, $descripcion11, $imagen11);


// Producto 12
$stmt->bind_param("sdsb", $nombre12, $precio12, $descripcion12, $imagen12);


// Producto 13
$stmt->bind_param("sdsb", $nombre13, $precio13, $descripcion13, $imagen13);


// Producto 14
$stmt->bind_param("sdsb", $nombre14, $precio14, $descripcion14, $imagen14);


// Producto 15
$stmt->bind_param("sdsb", $nombre15, $precio15, $descripcion15, $imagen15);




// Cerrar la conexión a la base de datos
$stmt->close();
$conn->close();
?>

