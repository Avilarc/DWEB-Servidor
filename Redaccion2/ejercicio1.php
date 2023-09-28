<?php
    /**
     * Realiza un programa que cree una lista de 5 palabras. El programa deberá mostrar por
    * pantalla el número de palabras de la lista, la primera y la última de ellas. El programa
    * deberá estar hecho con fácil mantenimiento (esto es que si ampliamos o disminuimos
    * el número de palabras de la lista no debemos tocar nada más en las restantes líneas
    * del programa).
     */


    $listaPalabras = array("hola","jose","que","tal","la parienta");

    echo "El numero de palabras que hay en la lista es: " . count($listaPalabras);
    echo "La primera palabra es: " . $listaPalabras[0];
    echo "La ultima palabra es: " . $listaPalabras[(count($listaPalabras) - 1)];
    
?>