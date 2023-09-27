<?php
    /**
     * Estamos haciendo un programa de loterías y tenemos dos variables llamadas número y
     * NúmeroPremiado, que se encuentran inicializadas con números de 5 cifras. El
     * programa deberá mostrar por pantalla:
     *      a) Si el número coincide con el número premiado.
     *      b) Si el número tiene reintegro, es decir, se dan a la vez las dos siguientes condiciones:
     *          a. La primera cifra del número coincide con la primera cifra del número premiado
     *          b. La última cifra del número coincide con la última cifra del número premiado 
    */


    function tienePremio($loteria, $numeroPremiado) {
        $primerNumLoteria = $loteria / 10000;
        $ultiumoNumLoteria = $loteria % 10;
        $primerNumPremio = $numeroPremiado / 10000;
        $ultimoNumPremio = $numeroPremiado % 10;

        if ($loteria == $numeroPremiado) {
            echo `Felicidades su número, ${loteria}, coincide con el numero premiado`;
        } else {
            echo `Su número ${loteria} no coincide con el numero premiado, comprobando reintegro...`;
            if ($primerNumLoteria == $primerNumPremio && $ultiumoNumLoteria == $ultimoNumPremio) {
                echo `El número tiene reintegro`;
            } else {
                echo `El número no tiene reintegro`;
            }
        }
    }
    $loteria = 34602;
    $numeroPremiado = 24506;
?>