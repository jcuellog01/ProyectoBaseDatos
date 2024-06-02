
<?php
            
include 'conexion.php';
session_start();

$_SESSION['user'] = $_POST['user'];
$user=$_SESSION['user'];

$_SESSION['passwd'] = $_POST['passwd'];
$passwd=$_SESSION['passwd'];

$select_query = "SELECT id_usuario, contrasenia FROM usuarios where id_usuario='$user' LIMIT 1;";
$result = mysqli_query($conexion, $select_query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $contrasenia = $row['contrasenia'];

    if ($passwd== $contrasenia) {
        header('Location: operaciones.php');
    } else {
        echo "Contraseña incorrecta.";
        header('Location: ../login.html');
    }
} else {
    echo "Usuario no encontrado.";
    header('Location: ../login.html');
}

mysqli_close($conexion);
?>