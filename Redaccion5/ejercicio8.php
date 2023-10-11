<?php
    /**
     * 8. Escribe un programa que tenga una contraseña guardada en una variable y nos diga si la contraseña
     * introducida es correcta o no mediante un mensaje.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Verificar Contraseña</title>
    </head>
    <body>
        <h1>Verificar Contraseña</h1>
        <form method="post">
            Ingresa la contraseña: <input type="password" name="contrasena"><br>
            <input type="submit" value="Verificar">
        </form>

        <?php
            $contrasenaGuardada = "Password1234";

            if (isset($_POST['contrasena'])) {
                $contrasenaIngresada = $_POST['contrasena'];


                if ($contrasenaIngresada === $contrasenaGuardada) {
                    echo "Contraseña correcta. ¡Acceso concedido!";
                } else {
                    echo "Contraseña incorrecta. ¡Acceso denegado!";
                }
            }
        ?>
    </body>
</html>