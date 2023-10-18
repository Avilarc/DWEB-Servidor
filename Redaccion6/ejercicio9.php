<?php
    /**
     * 9. Elabore un programa que lea un número entero y escriba el numero resultante de
     * invertir el orden de sus cifras
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Invertir Número</title>
    </head>
    <body>
        <h1>Invertir Número</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

                if ($numero >= 0) {
                    $numeroInvertido = strrev(strval($numero));
                    echo "Número original: $numero<br>";
                    echo "Número invertido: $numeroInvertido";
                } else {
                    echo "Por favor, ingrese un número entero no negativo.";
                }
            }
        ?>

        <form action="" method="post">
            Ingrese un número entero no negativo: <input type="text" name="numero">
            <input type="submit" value="Invertir Número">
        </form>
    </body>
</html>
