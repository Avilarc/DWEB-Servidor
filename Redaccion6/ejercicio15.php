<?php
    /**
     * 15. Escribir una función que descomponga y escriba los factores primos de cualquier
     * numero
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Descomposición en Factores Primos</title>
    </head>
    <body>
        <h1>Descomposición en Factores Primos</h1>
        <form method="post" action="">
            <label for="numero">Ingrese un número:</label>
            <input type="text" name="numero" id="numero">
            <input type="submit" value="Descomponer">
        </form>

        <?php
            function descomponerEnFactoresPrimos($numero) {
                $factoresPrimos = array();
                
                for ($i = 2; $i <= $numero; $i++) {
                    while ($numero % $i == 0) {
                        $factoresPrimos[] = $i;
                        $numero /= $i;
                    }
                }
                
                return $factoresPrimos;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
                $numero = (int)$_POST['numero'];

                if ($numero <= 1) {
                    echo "Ingrese un número entero positivo mayor que 1.";
                } else {
                    $factoresPrimos = descomponerEnFactoresPrimos($numero);
                    echo "Los factores primos de $numero son: " . implode(', ', $factoresPrimos);
                }
            }
        ?>
    </body>
</html>
