<html>
    <head>
        <title>Encripta Contraseñas</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <?php 
        require_once 'bd.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['usuario'];
            $clave = $_POST['clave'];
            $tipoUsuario = $_POST['tipoUsuario'];
            $res = Update($nombre, $clave, $tipoUsuario);
            if ($res === TRUE) {
                echo "<p>Contraseña actualizada con éxito</p>";
                header("Location: login.php"); 
            } else {
                echo "<p>Error al actualizar la contraseña</p>";
            }
        }
        ?>

<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
            <label for = "usuario">Usuario</label>
            <input value = "<?php if(isset($usuario))echo $usuario;?>" 
            id = "usuario" name = "usuario" type = "text">
            <label for = "clave">Clave</label>
            <input id = "clave" name = "clave" type = "password">
            <label for = "tipoUsuario">Tipo de Usuario</label>
            <select id = "tipoUsuario" name = "tipoUsuario">
                <option value = "admin">Administrador</option>
                <option value = "client">Cliente</option>
            </select>
            <input type = "submit">
        </form>
    </body>
</html>