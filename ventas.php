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
            <?php
            include 'select.php';
            ?>
        </main>


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