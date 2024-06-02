<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update'])) {
        // Update quantity
        $product_id = $_POST['update'];
        $quantity = $_POST['cantidad'][$product_id];

        if ($quantity > 0) {
            $_SESSION['cart'][$product_id] = $quantity;
        } else {
            unset($_SESSION['cart'][$product_id]);
        }

    } elseif (isset($_POST['remove'])) {
        // Remove item
        $product_id = $_POST['remove'];
        unset($_SESSION['cart'][$product_id]);

    } elseif (isset($_POST['checkout'])) {
        // Handle checkout
        // Implement checkout logic here
        // For example, save the order to the database, send confirmation email, etc.
        // Clear the cart after successful checkout
        $_SESSION['cart'] = [];
        header('Location: confirmacion.php');
        exit();
    }

    header('Location: carrito.php');
    exit();
} else {
    // Redirect to cart if the request is not POST
    header('Location: carrito.php');
    exit();
}
?>