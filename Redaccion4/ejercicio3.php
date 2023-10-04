<?php
    /**
     * Crea un programa, con una función, la cual, pasados dos objetos de tipo Persona, nos
     * devuelva cual es mayor y lo muestre por pantalla 
     */

     include "ejercicio1.php";

     function quienMayor($persona1, $persona2) {
        if ($persona1 -> getEdad() > $persona2 -> getEdad()) {
            return $persona1 -> getNombre() . " es mayor que " . $persona2 -> getNombre();
        } else {
            return $persona2 -> getNombre() . " es mayor que " . $persona1 -> getNombre();
        }
     }

     $persona1 = new Persona("Jose  Lito",72256877,25,1500);
     $persona2 = new Persona("Paco Poco",70050875,18,2000);

     echo quienMayor($persona1, $persona2);
?>