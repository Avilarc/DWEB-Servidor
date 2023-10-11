<?php
    /**
     * 7. Crea una aplicación que nos pida un día de la semana y que nos diga si es un dia laboral o no
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Día Laboral o No Laboral</title>
    </head>
    <body>
        <h1>Día Laboral o No Laboral</h1>
        <form method="post">
            Ingresa un día de la semana: <input type="text" name="dia"><br>
            <input type="submit" value="Verificar">
        </form>

        <?php
            if (isset($_POST['dia'])) {
                $dia = strtolower($_POST['dia']);  
                if ($dia == "lunes" || $dia == "martes" || $dia == "miércoles" || $dia == "miercoles" || $dia == "jueves" || $dia == "viernes") {
                    echo "Es un día laboral.";
                } else {
                    echo "No es un día laboral.";
                }
            }
        ?>
    </body>
</html>