<?php
    /**
     * Tengo un billete de avión para México. Necesito saber cuántas horas me faltan para
     * coger dicho avión. Para ello quiero que me hagas un programa que me pida la fecha y
     * hora actual y la fecha y hora de partida. El programa me dirá cuántas horas y minutos
     * me faltan para partir.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de Tiempo para Vuelo</title>
    </head>
    <body>
        <h1>Calculadora de Tiempo para Vuelo</h1>
        <form method="post" action="">
            <label>Fecha y Hora Actual (YYYY-MM-DD HH:MM):</label>
            <input type="text" name="fecha_hora_actual" required><br><br>
            
            <label>Fecha y Hora de Partida (YYYY-MM-DD HH:MM):</label>
            <input type="text" name="fecha_hora_partida" required><br><br>
            
            <input type="submit" value="Calcular Tiempo Restante">
        </form>

        <?php
            $fecha_hora_actual = $_POST["fecha_hora_actual"];
            $fecha_hora_partida = $_POST["fecha_hora_partida"];

            $fecha_hora_actual_obj = new DateTime($fecha_hora_actual);
            $fecha_hora_partida_obj = new DateTime($fecha_hora_partida);

            // Calcula la diferencia entre las dos fechas
            $diferencia = $fecha_hora_actual_obj->diff($fecha_hora_partida_obj);

            $horas = $diferencia->y * 365 * 24 + $diferencia->m * 30 * 24 + $diferencia->d * 24 + $diferencia->h;

            echo "Faltan " . $horas . " horas y " . $diferencia->i . " minutos para partir.";
                
        ?>
    </body>
</html>





