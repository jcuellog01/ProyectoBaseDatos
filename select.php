<?php

include 'conexion.php';

$select_query = "SELECT * FROM producto;";
$result = mysqli_query($conexion, $select_query);

echo "<div class='grid-container'>";

while ($fila = mysqli_fetch_assoc($result)) {
   
    echo "<div class='cell'";

    echo ("<td>" . $fila['nombre'] . "<br>");
    echo ("<td>" .  $fila['descripcion'] . "<br>");
    echo ("<td>" .  $fila['precio'] . "<br>");
    echo "</div";
   
}
    echo "</div";

?>