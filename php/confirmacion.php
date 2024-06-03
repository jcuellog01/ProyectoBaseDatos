<?php

include 'conexion.php';
session_start();

if (!isset($_SESSION['user'], $_SESSION['total'], $_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "Error: Variables de sesión no definidas o carrito vacío.";
    exit();
}

$userId = intval($_SESSION['user']);
$total = floatval($_SESSION['total']);

$stmtVentas = $conexion->prepare("INSERT INTO ventas(id_usuario, total, fecha_venta) VALUES (?, ?, NOW())");
$stmtVentas->bind_param("id", $userId, $total);

if ($stmtVentas->execute()) {
    $idVenta = $conexion->insert_id;
    
    $stmtDetalle = $conexion->prepare("INSERT INTO detalleVenta(id_venta, id_producto, cantidad) VALUES (?, ?, ?)");

    foreach ($_SESSION['carrito'] as $productoId => $cantidad) {
        $productoId = intval($productoId);
        $cantidad = intval($cantidad);
        
        $stmtDetalle->bind_param("iii", $idVenta, $productoId, $cantidad);
        $stmtDetalle->execute();

        $conexion->query("UPDATE productos SET stock = stock - $cantidad WHERE id = $productoId");
    }

    echo "Venta realizada con éxito";
} else {
    echo "Error al insertar datos en la tabla ventas: " . $stmtVentas->error;
}

$stmtVentas->close();
$stmtDetalle->close();
$conexion->close();

?>