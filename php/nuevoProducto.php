<?php
    
    
    include 'conexion.php';

    if(isset( $_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['stock'])&& isset($_POST['ruta'])){
    
        $nombre = $_POST['nombre'];
        $desc = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $ruta=$_POST['ruta'];
    
        $insert_query="INSERT INTO productos (nombre, descripcion, precio, stock,imagen)
        VALUES ('$nombre','$desc','$precio','$stock','$ruta')";

        $result=mysqli_query($conexion,$insert_query);
        
        echo "producto insertado correctamente";
        header('Location: ../nuevoProducto.html');

    }else{
        
        echo "ERROR";
        header('Location: ../nuevoProducto.html');

    }
?>