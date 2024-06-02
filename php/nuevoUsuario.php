<?php
include 'conexion.php';

if (isset($_POST['nombre']) && isset($_POST['ap1']) && isset($_POST['ap2']) && isset($_POST['tfno']) && isset($_POST['email']) &&isset($_POST['passwd'])) {
    $passwd = $_POST['passwd'];
    $name = $_POST['nombre'];
    $ap1 = $_POST['ap1'];
    $ap2 = $_POST['ap2'];
    $telefono = $_POST['tfno'];
    $email = $_POST['email'];

    $insert_query = $conexion->prepare("INSERT INTO usuarios (contrasenia, nombre, ap1, ap2, telefono, email, fecha_alta) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $insert_query->bind_param("ssssss", $passwd, $name, $ap1, $ap2, $telefono, $email);

    if ($insert_query->execute()) {
        header('Location: ./php/operaciones.php');
    } else {
        echo "Error: ";
    }

} else {
    echo "Error: no se han introducido todos los campos";
}
?>