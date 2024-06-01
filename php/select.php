<form action="agregar_al_carrito.php" method="POST">
    
    <?php
    include 'conexion.php';

    $select_query = "SELECT * FROM productos;";
    $result = mysqli_query($conexion, $select_query);

    echo "<div class='grid-container'>";
    while ($fila = mysqli_fetch_assoc($result)) {
        echo "<div class='cell'>";
        echo "<h3>". $fila['nombre']. "</h3><br>";
        echo "<p>". $fila['precio']. "€</p>";
        echo "<input type='hidden' name='id[]' value='".$fila['id']."'>";
        echo "<select name='cantidad[]' min='1' max='10'>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
      </select>";

        echo "<button type='submit' name='comprar' value='$fila[id]'>Agregar al carrito</button>";
        echo "</div>";
    }
    echo "</div>";
    ?>

</form>