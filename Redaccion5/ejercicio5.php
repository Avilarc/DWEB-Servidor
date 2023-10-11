<?php
    /**
     * 5. Crea una aplicación que nos pida un precio y nos calcule ese precio con el incremento del 21% del IVA. El
     * IVA será una constante.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de Precio con IVA</title>
    </head>
    <body>
        <h1>Calculadora de Precio con IVA</h1>
        <form method="post">
            Ingresa el precio: <input type="text" name="precio"><br>
            <input type="submit" value="Calcular Precio con IVA">
        </form>

        <?php
            $iva = 0.21;
            if (isset($_POST['precio'])) {
                $precio = $_POST['precio'];


                if (is_numeric($precio) && $precio >= 0) {

                    $precioConIVA = $precio + ($precio * $iva);

                    echo "El precio con el 21% de IVA es: $precioConIVA";
                } else {
                    echo "Por favor, ingresa un precio válido (número mayor o igual a cero).";
                }
            }
        ?>
    </body>
</html>