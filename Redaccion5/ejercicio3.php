<?php
    /**
     * 3. Desarrolla una aplicación que nos calcule el área de un circulo (pi*R2) a partir del radio que nos pedirá
    * por pantalla.
    */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de Área de Círculo</title>
    </head>
    <body>
        <h1>Calculadora de Área de Círculo</h1>
        <form method="post">
            Ingresa el radio del círculo: <input type="text" name="radio"><br>
            <input type="submit" value="Calcular Área">
        </form>

        <?php
            if (isset($_POST['radio'])) {
                $radio = $_POST['radio'];

                if (is_numeric($radio) && $radio >= 0) {
                    $area = M_PI * pow($radio, 2);

                    echo "El área del círculo con radio $radio es: $area";
                } else {
                    echo "Por favor, ingresa un radio válido (número mayor o igual a cero).";
                }
            }
        ?>
    </body>
</html>