<?php
    /**
     * 2. Diseñar un programa que determine la cantidad total a pagar por una llamada
     * telefónica de acuerdo a las siguientes premisas:
     *
     * Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
     * Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5
     * céntimos.
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calculo precio llamada</title>
    </head>
    <body>
        <h1>Introduce el timepo que ha estado en llamada en minutos</h1>
        <form method="post">
            <input type="text" name="tiempo"><br>
            <input type="submit" value="Introducir tiempo">
        </form>

        <?php
            if (isset($_POST['tiempo'])) {
                $minutos = $_POST['tiempo'];
                $precioTotal = 0.10;

                for ($i=1; $i <= $minutos ; $i++) { 
                    if ($i > 3) {
                        $precioTotal += 0.05;
                    }
                }

                echo "<br> El precio total de la llamada es: $precioTotal €";
            }
        ?>
    </body>
</html>