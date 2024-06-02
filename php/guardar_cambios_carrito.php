<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update'])) {
        // Update quantities
        foreach ($_POST['cantidad'] as $product_id => $quantity) {
            if ($quantity > 0) {
                $_SESSION['cart'][$product_id] = $quantity;
            } else {
                unset($_SESSION['cart'][$product_id]);
            }
        }
    }

    if (isset($_POST['remove'])) {
        // Remove item from cart
        $product_id = $_POST['remove'];
        unset($_SESSION['cart'][$product_id]);
    }

    // Redirect back to the cart page
    header('Location: carrito.php');
    exit();
} else {
    // Redirect to cart if the request is not POST
    header('Location: carrito.php');
    exit();
}
?>