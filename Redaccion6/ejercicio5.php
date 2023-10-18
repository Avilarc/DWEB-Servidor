<?php
    /**
     * Dados tres valores $A, $B y $C; escriba un programa para ordenarlos e imprimirlos de
     * forma descendente.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Valores Ordenados Descendentes</title>
    </head>
    <body>
        <h1>Valores Ordenados Descendentes</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $A = isset($_POST['A']) ? $_POST['A'] : null;
                $B = isset($_POST['B']) ? $_POST['B'] : null;
                $C = isset($_POST['C']) ? $_POST['C'] : null;

                if ($A !== null && $B !== null && $C !== null) {
                    $valores = [$A, $B, $C];

                    rsort($valores);

                    echo "Valores ordenados descendentes: " . implode(', ', $valores);
                } else {
                    echo "Por favor, ingrese valores para A, B y C.";
                }
            }
        ?>

        <form action="" method="post">
            Ingrese el valor A: <input type="text" name="A"><br>
            Ingrese el valor B: <input type="text" name="B"><br>
            Ingrese el valor C: <input type="text" name="C"><br>
            <input type="submit" value="Ordenar">
        </form>
    </body>
</html>
