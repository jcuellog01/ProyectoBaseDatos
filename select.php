<?php
include 'conexion.php';

$select_query = "SELECT * FROM productos;";
$result = mysqli_query($conexion, $select_query);

echo "<div class='grid-container'>";
while ($fila = mysqli_fetch_assoc($result)) {

    echo "<div class='cell'>";
    echo "<h3>". $fila['nombre']. "</h3>" . "<br>";
    echo "<p>". $fila['precio']. "€". "</p>";
    echo "</div>";
}

echo "</div>";
?>