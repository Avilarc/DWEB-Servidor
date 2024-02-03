<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Cliente</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <?php 
        require_once 'bd.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['usuario'];
            $clave = $_POST['clave'];
            $correo = $_POST['correo'];
            $res = register($nombre, $clave, $correo);
            if ($res === TRUE) {
                echo "<p>Registro exitoso</p>";
            
            } else {
                echo "<p>Error en el registro</p>";
            }
        }
        ?>

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
            <label for = "usuario">Usuario</label>
            <input id = "usuario" name = "usuario" type = "text" required>
            <label for = "clave">Clave</label>
            <input id = "clave" name = "clave" type = "password" required>
            <label for = "correo">Correo</label>
            <input id = "correo" name = "correo" type = "email" required>
            <input type = "submit" value="Registrarse">
        </form>
    </body>
</html>