<?php
    /**
     * 2.Crea una aplicación que nos pida un nombre y nos muestre un mensaje que diga: Bienvenido y el nombre
     * que hemos escrito anteriormente.
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Saludo Personalizado</title>
    </head>
    <body>
        <h1>Saludo Personalizado</h1>
        <form method="post">
            Ingresa tu nombre: <input type="text" name="nombre"><br>
            <input type="submit" value="Enviar">
        </form>

        <?php
            if (isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
        
                echo "Bienvenido, $nombre!";
            }
        ?>
    </body>
</html>