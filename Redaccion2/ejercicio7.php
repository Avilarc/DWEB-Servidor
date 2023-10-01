<?php
    /**
     * Recorrer una lista, inicializada con valores numéricos, con un blucle cambiando su
     * valor por el doble y después volver a recorrerla con otro bucle imprimiendo resultado de
     * la operación anterior.
     */


    $numeros = array(69,96,40,38,42,10,3);

    for ($i=0; $i < count($numeros); $i++) { 
        $numeros[$i] = $numeros[$i] * 2;
    }

    foreach ($var as $$numeros) {
        echo $var . ECHO_EOL;
    }
?>