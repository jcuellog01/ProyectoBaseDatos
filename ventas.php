<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Radical Motorworks</title>
</head>

<body>

    <div class="container">

        <header>
            <a href="index.html"><img src="img/Radical-Motorworks.png"></a> 
         </header>

        <nav>
            <a href="index.html"><strong>Inicio</strong></a>
            <a href="categoriasSegunda.html"><strong>Servicios</strong></a>
            <a href="ContactoSegunda.html"><strong>Contacto</strong></a>
        </nav>

        <main>
            <!-- <div class="grid-container">
                
                <div class="cell">2</div>
                <div class="cell">3</div>
                <div class="cell">4</div>
                <div class="cell">5</div>
                <div class="cell">6</div>
                <div class="cell">7</div>
                <div class="cell">8</div>
                <div class="cell">9</div>
              </div>  -->
        </main>

<?php
include 'conexion.php';

$select_query = "SELECT * FROM productos;";
$result = mysqli_query($conexion, $select_query);

echo "<div class='grid-container'>";

while ($fila = mysqli_fetch_assoc($result)) {

    echo "<div class='cell'>";
    echo $fila['nombre'] . "<br>";
    echo $fila['descripcion'] . "<br>";
    echo $fila['precio'] . "<br>";
    echo "</div>";
}

echo "</div>";
?>

        <footer>
            <div>
                <h3>Acerca de:</h3>
            </div>
            <div>
                <h3>Nuestras Redes Sociales:</h3>
            </div>
            <div>
                <h3>Formulario de Contacto:</h3>
            </div>
        </footer>
        <div class="copy">
            <h5>© Radical Motorworks: All Rights Reserved</h5>
        </div>

    </div>
 
</body>

</html>