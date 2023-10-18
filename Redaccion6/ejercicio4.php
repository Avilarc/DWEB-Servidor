<?php
    /**
     * . Elabore un programa para determinar si una hora leída en la forma horas, minutos y
     * segundos esta correctamente expresada.
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Verificar Hora</title>
    </head>
    <body>
        <h1>Verificar Hora</h1>
        <form method="post" action="">
            <label>Ingrese una hora en el formato HH:MM:SS:</label>
            <input type="text" name="hora" required>
            <input type="submit" value="Verificar">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $hora = $_POST["hora"];

                function esHoraValida($hora) {
                    $patron = '/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/';

                    return preg_match($patron, $hora);
                }

                if (esHoraValida($hora)) {
                    echo "<p>La hora ingresada ($hora) es válida.</p>";
                } else {
                    echo "<p>La hora ingresada ($hora) no es válida. Asegúrate de que esté en el formato HH:MM:SS.</p>";
                }
            }
        ?>
    </body>
</html>