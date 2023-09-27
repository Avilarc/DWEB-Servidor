<?php
    /**
     * Realiza un programa en el que haya una variable entera llamada año inicializada con
     * cualquier valor positivo. El programa mostrará por pantalla si el año guardado en dicha
     * variable es bisiesto. Ten en cuenta que un año es bisiesto cuando se cumple alguna de
     * estas dos condiciones:
     * a) Es múltiplo de 400
     * b) No es múltiplo de 400, pero es múltiplo de 4 y no es múltiplo de 100
     */

    function isBisiesto($year) {
        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
            echo `El año: ${year} es bisiesto`;
        }  else {
            echo `El año: ${year} no es bisiesto`;
        }
    }

    $year = 1996;

    isBisiesto($year);
?>