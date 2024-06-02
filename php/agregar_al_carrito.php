<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['cantidad'])) {
    $product_ids = $_POST['id'];
    $quantities = $_POST['cantidad'];

    // Initialize cart if not already done
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add or update items in cart
    foreach ($product_ids as $key => $product_id) {
        $quantity = $quantities[$key];
        
        // Check if quantity is greater than 0 before adding to cart
        if ($quantity > 0) {
            $_SESSION['cart'][$product_id] = $quantity;
        }
    }

    header('Location: carrito.php');
    exit();
} else {
    echo "Error: Datos de productos no válidos.";
}
?>