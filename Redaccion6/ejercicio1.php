<?php
    /**
     * 1. Elaborar un programa que reciba una hora expresada en segundos transcurridos desde
     * las 12 de la noche y la convierta en horas, minutos y segundos.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculo de horas</title>
    </head>
    <body>
        <h1>Introduce el tiempo en segundos</h1>
        <form method="post">
            <input type="text" name="tiempo"><br>
            <input type="submit" value="Calcular tiempo">
        </form>

        <?php
            if (isset($_POST['tiempo'])) {
                $segundos = $_POST['tiempo'];
                $minutos = 0;
                $horas = 0;
                while ($segundos >= 60) {
                    if ($segundos >= 60) {
                        $minutos += 1;
                        $segundos -= 60;
                    }

                    if ($minutos >= 60) {
                        $horas += 1;
                        $minutos -= 60;
                    }
                }

                echo "<br> $horas:$minutos:$segundos";
            }
        ?>
    </body>
</html>