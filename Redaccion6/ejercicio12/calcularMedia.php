<!DOCTYPE html>
<html>
<head>
    <title>Matriz Resultante</title>
</head>
<body>
    <h1>Matriz Resultante</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filas = (int)$_POST["filas"];
        $columnas = (int)$_POST["columnas"];

        echo "<form method='post' action='procesarMatriz.php'>";
        echo "<table>";

        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                echo "<td><input type='text' name='matriz[$i][$j]' required></td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "<input type='hidden' name='filas' value='$filas'>";
        echo "<input type='hidden' name='columnas' value='$columnas'>";
        echo "<input type='submit' value='Calcular Matriz Resultante'>";
        echo "</form>";
    }
    ?>

</body>
</html>
