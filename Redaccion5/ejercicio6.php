<?php
    /**
     * 6. Muestra los números desde el 1 al numero que pidamos por pantalla, es decir, si introducimos 4, la
     * respuesta del programa será 1 2 3 4.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mostrar Números</title>
    </head>
    <body>
        <h1>Mostrar Números</h1>
        <form method="post">
            Introduce un número: <input type="text" name="numero"><br>
            <input type="submit" value="Mostrar Números">
        </form>

        <?php
            if (isset($_POST['numero'])) {
                $numero = $_POST['numero'];

                if (is_numeric($numero) && $numero >= 1) {
                    echo "Números del 1 al $numero: ";
                    for ($i = 1; $i <= $numero; $i++) {
                        echo $i;
                        if ($i < $numero) {
                            echo ' ';
                        }
                    }
                } else {
                    echo "Por favor, ingresa un número entero mayor o igual a 1.";
                }
            }
        ?>
    </body>
</html>