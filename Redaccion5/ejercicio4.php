<?php
    /**
     * 4. Escribe un programa que nos pida un numero y escriba su valor de la tabla ascii. Por ejemplo si
     * escribimos 97 el resultado será ‘a’
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Valor ASCII de un Número</title>
    </head>
    <body>
        <h1>Valor ASCII de un Número</h1>
        <form method="post">
            Ingresa un número: <input type="text" name="numero"><br>
            <input type="submit" value="Calcular Valor ASCII">
        </form>

        <?php
            if (isset($_POST['numero'])) {
                $numero = $_POST['numero'];

                if (is_numeric($numero) && $numero >= 0 && $numero <= 255) {
                    $caracter = chr($numero);

                    echo "El valor ASCII de $numero es: '$caracter'";
                } else {
                    echo "Por favor, ingresa un número entero entre 0 y 255.";
                }
            }
        ?>
    </body>
</html>