<?php
session_start();
include 'conexion.php';

// Check if the cart is empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>El carrito está vacío.</p>";
    exit();
}

// Fetch product details from the database
$product_ids = array_keys($_SESSION['cart']);
$product_ids_placeholder = implode(',', array_fill(0, count($product_ids), '?'));

$query = "SELECT * FROM productos WHERE id IN ($product_ids_placeholder)";
$stmt = $conexion->prepare($query);
$stmt->bind_param(str_repeat('i', count($product_ids)), ...$product_ids);
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[$row['id']] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Carrito de Compras</h1>

    <form action="actualizar_carrito.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($product_ids as $product_id) {
                    $product = $products[$product_id];
                    $quantity = $_SESSION['cart'][$product_id];

                    // Only display if quantity is greater than 0
                    if ($quantity > 0) {
                        $total_price = $product['precio'] * $quantity;
                        $total += $total_price;

                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($product['nombre']) . "</td>";
                        echo "<td>" . htmlspecialchars($product['precio']) . "€</td>";
                        echo "<td>
                                <input type='number' name='cantidad[{$product_id}]' value='{$quantity}' min='1' max='10'>
                              </td>";
                        echo "<td>" . htmlspecialchars($total_price) . "€</td>";
                        echo "<td>
                                <button type='submit' name='update' value='{$product_id}'>Actualizar</button>
                                <button type='submit' name='remove' value='{$product_id}'>Eliminar</button>
                              </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <p>Total a pagar: <?php echo htmlspecialchars($total); ?>€</p>
        <button type="submit" name="checkout">Finalizar Compra</button>
    </form>
</body>
