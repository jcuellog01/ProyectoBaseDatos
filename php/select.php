<form action="agregar_al_carrito.php" method="POST">
    
<?php
include 'conexion.php';

$select_query = "SELECT * FROM productos;";
$result = mysqli_query($conexion, $select_query);

echo "<div class='grid-container'>";
while ($fila = mysqli_fetch_assoc($result)) {
  
  echo "<img src='" . $fila['imagen'] . "' alt='imagen del producto' class='imagenVentas'><br>";
    echo "<div class='cell'>";
    echo "<h3>" . htmlspecialchars($fila['nombre']) . "</h3><br>";
   
    echo "<p>" . htmlspecialchars($fila['precio']) . "€</p>";
    echo "<input type='hidden' name='id[]' value='" . htmlspecialchars($fila['id']) . "'>";
    echo "<label for='cantidad" . $fila['id'] . "'>Cantidad:</label>";
    echo "<select id='cantidad" . $fila['id'] . "' name='cantidad[]'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
      </select>";

    echo "<button type='submit' name='comprar' value='" . htmlspecialchars($fila['id']) . "'>Agregar al carrito</button>";
    echo "</div>";
}
echo "</div>";
?>

</form>