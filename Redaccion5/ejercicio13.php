<?php
    /**
     * 13. Realizar una atraicionas que nos pida dos números y muestre cual es el mayor de los dos.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Encontrar el Mayor de Dos Números</title>
    </head>
    <body>
        <h1>Encontrar el Mayor de Dos Números</h1>
        <form method="post">
            Ingresa el primer número: <input type="text" name="numero1"><br>
            Ingresa el segundo número: <input type="text" name="numero2"><br>
            <input type="submit" value="Encontrar el Mayor">
        </form>

        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];

                if (is_numeric($numero1) && is_numeric($numero2)) {
                    if ($numero1 > $numero2) {
                        echo "$numero1 es mayor que $numero2.";
                    } elseif ($numero1 < $numero2) {
                        echo "$numero2 es mayor que $numero1.";
                    } else {
                        echo "Ambos números son iguales.";
                    }
                } else {
                    echo "Por favor, ingresa números válidos.";
                }
            }
        ?>
    </body>
</html>

