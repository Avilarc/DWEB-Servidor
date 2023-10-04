<?php
    /**
     * Crea un programa, con una función que suba el sueldo a la persona que hayamos
     * creado un porcentaje que le pasemos como parámetro, en caso de ser un valor
     * inválido debemos manejarlo con una excepción. 
     */

    include "ejercicio1.php";

    function subirSueldo($porcentaje,$persona) {
        $persona -> setSueldo($persona -> getSueldo() * ($porcentaje/100));
    }

    $persona1 = new Persona("Maria Hernan",28558877,78,1000);
    subirSueldo(20,$persona1);
?>