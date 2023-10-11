<?php
    /**
     * 10. Eliminar los espacios de una frase pasada por consola por el usuario.
     * No se si hemos visto como usar una consola en php, asi que lo hice con un formulario.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar Espacios de una Frase</title>
    </head>
    <body>
        <h1>Eliminar Espacios de una Frase</h1>
        <form method="post">
            Ingresa una frase: <input type="text" name="frase"><br>
            <input type="submit" value="Eliminar Espacios">
        </form>

        <?php
            if (isset($_POST['frase'])) {
                $frase = $_POST['frase'];


                $fraseSinEspacios = str_replace(' ', '', $frase);


                echo "Frase sin espacios: $fraseSinEspacios";
            }
        ?>
    </body>
</html>