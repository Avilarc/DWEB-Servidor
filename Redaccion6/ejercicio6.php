<?php
    /**
     * . Elabore un programa que lea un carácter y determine si es:
     *    1. una letra mayúscula
     *    2. una letra minúscula
     *    3. un carácter numérico
     *    4. un carácter de puntuación
     *    5. un carácter especial
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Determinar Tipo de Carácter</title>
    </head>
    <body>
        <h1>Determinar Tipo de Carácter</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $caracter = isset($_POST['caracter']) ? $_POST['caracter'] : '';

                if (strlen($caracter) == 1) {
                    if (ctype_upper($caracter)) {
                        echo "El carácter '$caracter' es una letra mayúscula.";
                    } elseif (ctype_lower($caracter)) {
                        echo "El carácter '$caracter' es una letra minúscula.";
                    } elseif (is_numeric($caracter)) {
                        echo "El carácter '$caracter' es un carácter numérico.";
                    } elseif (ctype_punct($caracter)) {
                        echo "El carácter '$caracter' es un carácter de puntuación.";
                    } else {
                        echo "El carácter '$caracter' es un carácter especial.";
                    }
                } else {
                    echo "Por favor, ingrese un solo carácter.";
                }
            }
        ?>

        <form action="" method="post">
            Ingrese un carácter: <input type="text" name="caracter" maxlength="1"><br>
            <input type="submit" value="Determinar Tipo">
        </form>
    </body>
</html>
