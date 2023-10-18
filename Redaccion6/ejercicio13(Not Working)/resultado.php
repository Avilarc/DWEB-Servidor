<!DOCTYPE html>
<html>
    <head>
        <title>Resultado - Localizar Vector en Matriz</title>
    </head>
    <body>
        <h1>Resultado</h1>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = (int)$_POST["n"];
                $m = (int)$_POST["m"];
                $matriz = $_POST["matriz"];
                $vector = explode(",", $_POST["vector"]);
        
                // Procesar la matriz
                $matriz = array_chunk($matriz, $n);
        
                // Buscar el vector en la matriz
                $encontrado = false;
                $filaEncontrada = -1;
        
                for ($i = 0; $i < $n; $i++) {
                    if (count($matriz[$i]) == $n) {
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
