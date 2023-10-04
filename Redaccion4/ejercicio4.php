<?php
    /**
     * Crea un programa, con una función que suba el sueldo a la persona que hayamos
     * creado un porcentaje que le pasemos como parámetro, en caso de ser un valor
     * inválido debemos manejarlo con una excepción. 
     */

    include "ejercicio1.php";

    function subirSueldo($porcentaje,$persona) {
        $nuevoSueldo = $persona -> getSueldo() + ($persona -> getSueldo() * ($porcentaje/100));

        if ($nuevoSueldo <= $persona -> getSueldo()) {
            throw new Exception("El sueldo no puede ser 0 o negativo, cuando se le está aumentando <br>");
        } else {
            $persona -> setSueldo($nuevoSueldo);
        }
    }

    $persona1 = new Persona("Maria Hernan",28558877,78,1000);
    echo "Ejercicio 4 : ------------------------------ <br>";
    echo "El sueldo antes de subirle el sueldo es: " . $persona1 -> getSueldo() . "<br>";
    try {
        subirSueldo(20,$persona1);
        echo "El sueldo despues de aplicarle la subida es: " . $persona1 -> getSueldo() . "<br>";
        
    } catch (Exception $e) {
        echo $e;
    }
    
?>