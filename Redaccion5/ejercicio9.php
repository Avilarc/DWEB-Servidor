<?php
    /**
     * 9. Pide por teclado un número entero positivo (debemos controlarlo) y muestra el número de cifras
     * que tiene. Por ejemplo: si introducimos 1250, nos muestre que tiene 4 cifras. Tendremos que
     * controlar si tiene una o mas cifras, al mostrar el mensaje.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Número de Cifras</title>
    </head>
    <body>
        <h1>Número de Cifras</h1>
        <form method="post">
            Ingresa un número entero positivo: <input type="text" name="numero"><br>
            <input type="submit" value="Calcular Cifras">
        </form>

        <?php
            if (isset($_POST['numero'])) {
                $numero = $_POST['numero'];


                if (ctype_digit($numero) && $numero > 0) {
                    $cifras = strlen($numero);


                    echo "El número $numero tiene $cifras cifra(s).";
                } else {
                    echo "Por favor, ingresa un número entero positivo.";
                }
            }
        ?>
    </body>
</html>