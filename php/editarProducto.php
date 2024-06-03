<?php

    include 'conexion.php';

    if(isset( $_POST['id']) && isset($_POST['stock'])){
    
        $id= $_POST['id'];
        
        $stock = $_POST['stock'];
    
        $update_query="UPDATE productos SET stock = stock + $stock WHERE id=$id;";
        
        $result=mysqli_query($conexion,$update_query);
        
        echo "producto editado correctamente";
        header('Location: operaciones.php');

    }else{
        
        echo "ERROR";
        header('Location: ../editarProducto.html');

    }
?>