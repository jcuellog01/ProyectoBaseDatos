<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Radical Motorworks</title>
</head>

<body>

    <div class="container">

        <header>
            <a href="../index.html"><img src="../img/Radical-Motorworks.png"></a> 
         </header>

         <nav>
            <a href="../index.html"><strong>Inicio</strong></a>
            <a href="../login.html"><strong>Login</strong></a>
            <a href="ventas.php"><strong>Ventas</strong></a>
        </nav>

        <main>
            <?php
            include 'select.php';
            ?>

        <section id="sectionApi">
           
           <div id="ubicacion"><h2>¿Donde nos encontramos?</h2><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194202.681245421!2d-5.229843569202213!3d38.57205081806933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72fa0a030775e9%3A0x313bde847075d63e!2sRadikal%20Motors%20Garage!5e0!3m2!1ses!2ses!4v1714208603601!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
   
           
           <h3>Chistes de Chuck Norris, conectado con APIRest:</h3>
           <div id="chuckJokes"></div>
           
           <input type="button" onclick="chistesAPI();">
   
        </section>

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