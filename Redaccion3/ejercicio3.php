<?php
    /**
     * Realiza un programa que, usando una función, muestre la lista de todos los divisores de
     * un número inicializado en una variable o pasado como parámetro
     */

    function divisores($numero) {
        $listaDivisores = array();
        for ($i=1; $i < $numero; $i++) { 
            if ($numero % $i == 0) {
                array_push($listaDivisores,$i);
            }
        }

        return $listaDivisores;
    }


    echo "Los divisores de 10 son:" . divisores(10);

?>