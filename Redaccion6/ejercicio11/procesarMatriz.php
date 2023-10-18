<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filas = (int)$_POST["filas"];
            $columnas = (int)$_POST["columnas"];
            $matriz = $_POST["matriz"];

            for ($i=0; $i < $filas; $i++) { 
                for ($j=0; $j < $columnas; $j++) { 
                    $matriz[$i][$j] = (int)$matriz[$i][$j];
                }
            }

            $matrizResultante = [];
            for ($i = 0; $i < $filas; $i++) {
                $fila = $matriz[$i];
                $media_fila = array_sum($fila) / count($fila);
                $matriz_resultante_fila = array_map(function ($valor) use ($media_fila) {
                    return $valor - $media_fila;
                }, $fila);
                $matriz_resultante[] = $matriz_resultante_fila;
            }
    
            echo "<table boder='1'>";
            foreach ($matriz_resultante as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

    ?>
</body>
</html>