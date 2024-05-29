<?php
include 'conexion.php';

if ($conexion) {
    $nombre = $_POST['nombre'];
    $ap1 = $_POST['ap1'];
    $ap2 = $_POST['ap2'];
    $comision = $_POST['comision'];

    $insert_query = "INSERT INTO comercial (nombre, apellido1, apellido2, comisión) VALUES ('$nombre', '$ap1', '$ap2', $comision)";

    if (mysqli_query($conexion, $insert_query)) {
        echo "Valor insertado correctamente.<br>";
    } else {
        echo "Error insertando valor " . mysqli_error($conexion) . "<br>";
    }

    echo $nombre . "<br>";
    echo $ap1 . "<br>";
    echo $ap2 . "<br>";
    echo $comision . "<br>";
} else {
    echo "Conexion fallida: " . mysqli_connect_error() . "<br>";
}
?>