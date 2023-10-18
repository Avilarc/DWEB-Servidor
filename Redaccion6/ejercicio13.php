<!DOCTYPE html>
<html>
    <head>
        <title>Localizar Vector en Matriz</title>
    </head>
    <body>
        <h1>Localizar Vector en Matriz</h1>

        <form method="post">
            <label for="n">Tamaño de la matriz (N):</label>
            <input type="number" name="n" id="n" required><br>

            <label for="m">Tamaño del vector (M):</label>
            <input type="number" name="m" id="m" required><br>

            <h2>Ingrese la matriz (separada por comas):</h2>
            <textarea name="matriz" rows="5" cols="50" required></textarea><br>

            <h2>Ingrese el vector (separado por comas):</h2>
            <input type="text" name="vector" required><br>

            <input type="submit" value="Localizar Vector">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = (int)$_POST["n"];
                $m = (int)$_POST["m"];
                $matriz = $_POST["matriz"];
                $vector = explode(",", $_POST["vector"]);

                $matriz = explode("\n", $matriz);
                for ($i = 0; $i < count($matriz); $i++) {
                    $matriz[$i] = array_map('intval', explode(",", $matriz[$i]));
                }

                $encontrado = false;
                $filaEncontrada = -1;

                for ($i = 0; $i < $n; $i++) {
                    if (count($matriz[$i]) == $m) {
                        if (array_slice($matriz[$i], 0, $m) === $vector) {
                            $encontrado = true;
                            $filaEncontrada = $i + 1;
                            break;
                        }
                    }
                }

                if ($encontrado) {
                    echo "El vector se encontró en la fila $filaEncontrada de la matriz.";
                } else {
                    echo "El vector no se encontró en ninguna fila de la matriz.";
                }
            }
        ?>

    </body>
</html>
