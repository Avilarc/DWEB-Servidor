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
                $suma_fila = array_sum($fila);
                $matrizResultante[] = $fila; // Agrega la fila original
                $matrizResultante[] = [$suma_fila]; // Agrega la suma de la fila
            }
    
            echo "<table border='1'>";
            foreach ($matrizResultante as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

    ?>