<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>

<?php
include('funciones.php');

$productos = datos_productos();

foreach ($productos as $producto) {
    echo '<div class="card">';
    echo '<h3>ID: ' . $producto['id'] . '</h3>';
    echo '<p>Nombre: ' . $producto['nombre'] . '</p>';
    echo '<p>Precio: $' . $producto['precio'] . '</p>';
    echo '</div>';
}
?>

</body>
</html>
