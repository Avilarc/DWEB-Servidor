<?php
    /**
     * 7. Elaborar un programa para imprimir una tabla con los cuadrados y los cubos de los N
     * primeros números.
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tabla de Cuadrados y Cubos</title>
    </head>
    <body>
        <h1>Tabla de Cuadrados y Cubos</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $n = isset($_POST['n']) ? intval($_POST['n']) : 0;

                if ($n > 0) {
                    echo "<table border='1'>";
                    echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
                    for ($i = 1; $i <= $n; $i++) {
                        $cuadrado = $i * $i;
                        $cubo = $i * $i * $i;
                        echo "<tr><td>$i</td><td>$cuadrado</td><td>$cubo</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Por favor, ingrese un valor válido para N.";
                }
            }
        ?>

        <form action="" method="post">
            Ingrese un valor para N: <input type="text" name="n">
            <input type="submit" value="Generar Tabla">
        </form>
    </body>
</html>
