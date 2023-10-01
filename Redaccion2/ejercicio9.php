<?php
    /**
     * Crear una matriz de dos dimensiones con un tamaño de 4x4 cuya diagonal sea 1 y el
     * resto de elementos sean 0, después recorrerla mostrando sus elementos, quedando
     * de la siguiente forma: 
     */

    $matriz array(array(1,0,0,0),array(0,1,0,0),array(0,0,1,0),array(0,0,0,1));

    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            echo $elemento . " ";
        }
        echo "<br>"; 
    }
?>