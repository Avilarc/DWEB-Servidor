<!DOCTYPE html>
<html>
    <head>
        <title>Localizar Vector en Matriz - Paso 2</title>
    </head>
    <body>
        <h1>Paso 2: Ingrese la matriz y el vector</h1>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = (int)$_POST["n"];
                $m = (int)$_POST["m"];
                $matriz = [];
                $vector = $_POST["vector"];

                // Generar el formulario para ingresar la matriz
                echo "<form method='post' action='resultado.php'>";
                echo "<input type='hidden' name='n' value='$n'>";
                echo "<input type='hidden' name='m' value='$m'>";

                echo "<h2>Ingrese la matriz:</h2>";

                for ($i = 0; $i < $n; $i++) {
                    echo "<div>";
                    for ($j = 0; $j < $n; $j++) {
                        $matrizInputName = "matriz[$i][$j]";
                        echo "<input type='number' name='$matrizInputName' required>";
                    }
                    echo "</div>";
                }

                echo "<h2>Ingrese el vector (separado por comas):</h2>";
                echo "<input type='text' name='vector' value='$vector' required><br>";
                echo "<input type='submit' value='Localizar Vector'>";
                echo "</form>";
}
        ?>

    </body>
</html>
