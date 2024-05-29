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
            <a href="indexSegunda.html"><img src="img/Radical-Motorworks.png"></a> 
         </header>

        <nav>
            <a href="indexSegunda.html"><strong>Inicio</strong></a>
            <a href="categoriasSegunda.html"><strong>Servicios</strong></a>
            <a href="ContactoSegunda.html"><strong>Contacto</strong></a>
        </nav>

        <main>
        <h2>MENU DE ADMINISTRACION: </h2>
            <form action="login.php" method="post">
                <fieldset>
                    <legend>Seleccione una opción:</legend>
                    <div class="grupo">
                        <input type="radio" id="insert" name="opcion" value="insert" checked>
                        <label for="insert">Insertar producto</label>
                    </div>
            
                    <div class="grupo">
                        <input type="radio" id="aniadirUsuario" name="opcion" value="aniadirUsuario">
                        <label for="aniadirUsuario">Añadir usuario </label>
                    </div>
            
                    <div class="grupo">
                        <input type="radio" id="delete" name="opcion" value="delete">
                        <label for="delete">Eliminar producto</label>
                    </div>

                    <div class="grupo">
                        <input type="radio" id="update" name="opcion" value="update">
                        <label for="update">Editar producto</label>
                    </div>
            
                </fieldset>
            
                <div class="grupo">
                    <input type="submit" value="Enviar" >
                </div>
            </form>



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
    <script src="./js/script.js"></script>
</body>

</html>