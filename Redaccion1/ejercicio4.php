<?php
    /**
     * Haz un programa en el que haya una variable entera llamada número con un valor
     * cualquiera. El programa deberá mostrar por pantalla si dicho número es par
     */

    function isPar($numero) {
        if ($numero % 2) {
            echo `El ${numero} es par`;
        } else {
            echo `El ${numero} es impar`;
        }
    }

     $numero = 10;

     isPar($numero);
?>