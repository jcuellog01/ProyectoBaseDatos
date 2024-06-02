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
            <a href="/index.html"><img src="../img/Radical-Motorworks.png"></a> 
         </header>

        <nav>
            <a href="../index.html"><strong>Inicio</strong></a>
            <a href="../login.html"><strong>Login</strong></a>
            <a href="../php/ventas.php"><strong>Ventas</strong></a>
        </nav>

        <main>

        
       
    <?php 

        session_start();

       echo "<h2>MENU DE ADMINISTRACION</h2>";
       echo "<h4>(Solo para usuarios contenidos en el grupo admins)</h4>" . "<h3>" . "Tu usuario es el numero: " . $_SESSION['user'] . "</h3>";

    ?>
<form method="post">
    <fieldset>
        <legend>Seleccione una opción:</legend>
        <div class="grupo">
            <input type="radio" id="insert" name="opcion" value="insert" checked>
            <label for="insert">Insertar producto</label>
        </div>

        <div class="grupo">
            <input type="radio" id="nuevoUsuario" name="opcion" value="nuevoUsuario">
            <label for="nuevoUsuario">Añadir usuario</label>
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
        <input type="submit" value="Enviar">
    </div>
</form>

<?php
    $_SESSION['admin'] = [1, 2, 3];

    if (isset($_POST['opcion'])) {
        switch ($_POST['opcion']) {
            case 'insert':
                if (estaContenido($_SESSION['user'], $_SESSION['admin'])) {
                    header('Location: ../nuevoProducto.html');
                } else {
                    header('Location: operaciones.php');
                }
                break;
            
            case 'nuevoUsuario':
                if (estaContenido($_SESSION['user'], $_SESSION['admin'])) {
                    header('Location: ../nuevoUsuario.html');
                } else {
                    header('Location: operaciones.php');
                }
                break;
            
            case 'delete':
                if (estaContenido($_SESSION['user'], $_SESSION['admin'])) {
                    header('Location: ../eliminarProducto.html');
                } else {
                    header('Location: operaciones.php');
                }
                break;
            
            case 'update':

                if (estaContenido($_SESSION['user'], $_SESSION['admin'])) {
                    header('Location: ../editarProducto.html');
                } else {
                    header('Location: operaciones.php');
                }
                
                break;
        }
    }

    function estaContenido($user, $admins) {
        return in_array($user, $admins);
    }
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
    <script src="./js/script.js"></script>
</body>

</html>