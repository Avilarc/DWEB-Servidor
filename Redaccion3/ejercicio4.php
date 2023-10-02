<?php
    /**
     * Realiza un programa que, llamando a una función, nos muestre si el número aleatorio
     * inicializado en una variable es primo o no.
     */

     function esPrimo($numero) {
        $listaDivisores = array();
        for ($i=1; $i < $numero; $i++) { 
            if ($numero % $i == 0) {
                array_push($listaDivisores,$i);
            }
        }
        if (count($listaDivisores) == 2) {
            return "Es primo";
        } else{
            return "No es primo";
        }
    }


    $numero = rand(1,100);
    echo esPrimo($numero);
?>