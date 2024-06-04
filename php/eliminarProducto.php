<?php

    include 'conexion.php';

    if(isset( $_POST['id'])){
    
        $id= $_POST['id'];
    
        $update_query="DELETE FROM productos WHERE id=$id;";
        
        $result=mysqli_query($conexion,$update_query);
        
        echo "producto eliminado correctamente";
        header('Location: operaciones.php');

    }else{
        
        echo "ERROR";
        header('Location: ../eliminarProducto.html');

    }
?>