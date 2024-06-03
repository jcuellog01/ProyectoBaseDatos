<?php
session_start();

function authenticate_user($username, $password) {
    include 'conexion.php';
    $select_query = "SELECT id_usuario, contrasenia FROM usuarios where id_usuario='$username' LIMIT 1;";
    $result = mysqli_query($conexion, $select_query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $contrasenia = $row['contrasenia'];
        
        if ($password == $contrasenia) {
            return true;
        } else {
            echo "Contraseña incorrecta.";
            return false;
        }
    } else {
        echo "Usuario no encontrado.";
        return false;
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['passwd'];

    $user_id = authenticate_user($username, $password);

    if ($user_id !== false) {
        session_unset();
        session_destroy(); 

        session_start(); 
        $_SESSION['user'] = $username; 
        $_SESSION['carrito'] = [];
        $_SESSION['admin'] = [1, 2, 3];
        
        if (estaContenido($_SESSION['user'], $_SESSION['admin'])) {
            header('Location: operaciones.php');
        } else {
            header('Location: ventas.php');
        }

        exit;
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}

function estaContenido($user, $admins) {
    return in_array($user, $admins);
}
?>