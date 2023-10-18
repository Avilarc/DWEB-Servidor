<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado</h1>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $size = isset($_POST["matriz_size"]) ? (int)$_POST["matriz_size"] : 0;
                $values = isset($_POST["matriz_values"]) ? $_POST["matriz_values"] : '';
                
                if ($size > 0 && $values != '') {
                    $matrix = explode(',', $values);

                    if (count($matrix) == $size * $size) {
                        $matrix = array_chunk($matrix, $size);

                        $matrix = array_reverse($matrix);

                        echo '<h2>Matriz con el orden de filas cambiado:</h2>';
                        echo '<table border="1">';
                        foreach ($matrix as $row) {
                            echo '<tr>';
                            foreach ($row as $cell) {
                                echo '<td>' . $cell . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';
                    } else {
                        echo '<p>La cantidad de valores no coincide con el tamaño de la matriz cuadrada.</p>';
                    }
                } else {
                    echo '<p>Ingrese un tamaño válido y valores para la matriz.</p>';
                }
            }
        ?>
    </body>
</html>
