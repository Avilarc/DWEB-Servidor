<?php
    /**
     * Crea un programa, con una función que suba el sueldo a la persona que hayamos
     * creado un porcentaje que le pasemos como parámetro, en caso de ser un valor
     * inválido debemos manejarlo con una excepción. 
     */

    include "ejercicio1.php";

    function subirSueldo($porcentaje,$persona) {
        $nuevoSueldo = $persona -> getSueldo() * ($porcentaje/100);

        if ($nuevoSueldo <= 0) {
            throw new Exception("El sueldo no puede ser 0 o negativo, cuando se le está aumentando");
        } else {
            $persona -> setSueldo($nuevoSueldo);
        }
    }

    $persona1 = new Persona("Maria Hernan",28558877,78,1000);
    try {
        subirSueldo(20,$persona1);
    } catch (Exception $e) {
        echo $e;
    }
    
?>