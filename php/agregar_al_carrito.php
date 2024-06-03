<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "Error: Debes iniciar sesión primero.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['cantidad'])) {
    $product_ids = $_POST['id'];
    $quantities = $_POST['cantidad'];

    // Inicializar el carrito si no está ya hecho
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Agregar o actualizar artículos en el carrito
    foreach ($product_ids as $key => $product_id) {
        $quantity = $quantities[$key];
       
        // Verificar si la cantidad es mayor a 0 antes de agregar al carrito
        if ($quantity > 0) {
            $_SESSION['cart'][$product_id] = $quantity;
        }
    }
    $SESSION['cantidad']=$quantity;

    header('Location: carrito.php');
    exit();
} else {
    echo "Error: Datos de productos no válidos.";
}
?>