<?php
    /**
     * 10. Elabore un programa que imprima la figura de un triángulo rectángulo ajustada a la
     * izquierda, formada por asteriscos. El lado del triángulo se lee como dato.
     * • Por ejemplo, para N=6 la salida sería
        *
        * *
        * * *
        * * * *
        * * * * *
        * * * * * *
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Triángulo Rectángulo de Asteriscos</title>
    </head>
    <body>
        <h1>Triángulo Rectángulo de Asteriscos</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $lado = isset($_POST['lado']) ? intval($_POST['lado']) : 0;

                if ($lado > 0) {
                    echo "Triángulo rectángulo de asteriscos con un lado de $lado:<br>";

                    for ($i = 1; $i <= $lado; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo "* ";
                        }
                        echo "<br>";
                    }
                } else {
                    echo "Por favor, ingrese un valor válido para el lado del triángulo.";
                }
            }
        ?>

        <form action="" method="post">
            Ingrese el lado del triángulo: <input type="text" name="lado">
            <input type="submit" value="Generar Triángulo">
        </form>
    </body>
</html>
