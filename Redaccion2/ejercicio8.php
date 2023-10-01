<?php
    /**
     * Crear una lista con los siguientes valores:
     * "DE"=>"Berlín", "DK" =>"Copenhage", "ES" =>"Madrid"
     * y en función del valor de una variable nos muestre por pantalla a qué país pertenece la
     * capital del código que contiene la variable. 
     */

     $paises = [
        "DE" => "Berlin",
        "DK" => "Copenhague",
        "ES" => "Madird"
     ];


     $codigoPais = "DK";

     if (array_key_exists($codigoPais,$paises)) {
        $capital = $paises[$codigoPais];
        echo `La capital de ${codigoPais} es  ${capital}`;
     } else {
        echo `El codigo de ${codigoPais} no se encuentra a la lista`;
     }
?>