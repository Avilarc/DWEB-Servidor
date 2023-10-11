<?php
    /**
     * 15. Realizar una aplicación que nos pida dos números por pantalla y nos muestre la división, y si no
     * es posible un mensaje de error.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>División de Dos Números</title>
    </head>
    <body>
        <h1>División de Dos Números</h1>
        <form method="post">
            Ingresa el primer número: <input type="text" name="numero1"><br>
            Ingresa el segundo número: <input type="text" name="numero2"><br>
            <input type="submit" value="Dividir">
        </form>

        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];

                if (is_numeric($numero1) && is_numeric($numero2)) {
                    if ($numero2 != 0) {
                        $division = $numero1 / $numero2;
                        echo "La división de $numero1 entre $numero2 es: $division";
                    } else {
                        echo "No es posible dividir por cero. Por favor, ingresa un segundo número distinto de cero.";
                    }
                } else {
                    echo "Por favor, ingresa números válidos.";
                }
            }
        ?>
    </body>
</html>