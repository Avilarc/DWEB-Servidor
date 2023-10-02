<?php
    /**
     * Usando la función elevar al cuadrado realizada en la actividad 2.2, realizar un programa
     * que calcule la suma de los cuadrados de los números comprendidos entre 5 y 13
     */

    function potencia($base,$exponente = 2) {
        return pow($base,$exponente);
        
     }

     $total = 0;

     for ($i=5; $i <= 13; $i++) { 
        $total += potencia($i);
     }

     echo "la suma total de las potencias del 5 al 13 es" . $total;
?>