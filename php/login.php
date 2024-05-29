
<?php
            
include 'conexion.php';

$usuario = $_POST['user'];
$passwd = $_POST['passwd'];

$select_query = "SELECT id_usuario, contrasenia FROM usuarios where id_usuario='$usuario' LIMIT 1;";
$result = mysqli_query($conexion, $select_query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $contrasenia = $row['contrasenia'];

    if ($passwd== $contrasenia) {
        header('Location: ../admin.html');
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

mysqli_close($conexion);
?>