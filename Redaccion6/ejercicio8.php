<?php
    /**
     * 8. Diseñar un programa para imprimir los números impares menores que N
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Números Impares Menores que N</title>
    </head>
    <body>
        <h1>Números Impares Menores que N</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $n = isset($_POST['n']) ? intval($_POST['n']) : 0;

                if ($n > 0) {
                    echo "Números impares menores que $n:<br>";

                    for ($i = 1; $i < $n; $i += 2) {
                        echo "$i, ";
                    }
                } else {
                    echo "Por favor, ingrese un valor válido para N.";
                }
            }
        ?>

        <form action="" method="post">
            Ingrese un valor para N: <input type="text" name="n">
            <input type="submit" value="Generar Números Impares">
        </form>
    </body>
</html>
