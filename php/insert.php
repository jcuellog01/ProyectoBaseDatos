<?php
    
    echo "<h1>" . "INSERCION DE PRODUCTOS: " . "</h1>";
    include 'conexion.php';

    if(isset( $_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['stock'])){
    
        $nombre = $_POST['nombre'];
        $desc = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
    
        $insert_query="INSERT INTO productos (nombre, descripcion, precio, stock)
        VALUES ('$nombre','$desc','$precio','$stock')";

        $result=mysqli_query($conexion,$insert_query);
        
        echo "producto insertado correctamente";
        header('Location: ../nuevoProducto.html');

    }else{
        
        echo "ERROR";
        header('Location: ../nuevoProducto.html');

    }
?>