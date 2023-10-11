<?php
    /**
     * 14. Mostrar la tabla de multiplicar de un numero pedido por teclado.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tabla de Multiplicar</title>
    </head>
    <body>
        <h1>Tabla de Multiplicar</h1>
        <form method="post">
            Ingresa un número para mostrar su tabla de multiplicar: <input type="text" name="numero"><br>
            <input type="submit" value="Mostrar Tabla">
        </form>

        <?php
            if (isset($_POST['numero'])) {
                $numero = $_POST['numero'];

                if (is_numeric($numero)) {
                    echo "<h2>Tabla de Multiplicar del $numero</h2>";
                    echo "<table border='1'>";

                    for ($i=1; $i <= 10; $i++) { 
                        $resultado = $numero * $i;
                        echo "<tr><td>$numero x $i</td><td>= $resultado</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Por favor, ingresa un número válido.";
                }
            }

        ?>
    </body>
</html>