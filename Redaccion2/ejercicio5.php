<?php
    /**
     * Realiza un programa que, con una cadena inicializada, muestre cada una de las palabras
     * en una línea diferente. Para la realización de este ejercicio se debe recorrer la cadena
     * analizando cada palabra, no se puede usar el comando explode. 
    */

    $frase = "Y me lo dices a mi que soy el mas inutil";

    $palabra  = ""; //variable donde almacenaremos la palabr actual

    for ($i=0; $i < strlen($frase); $i++) { 
        $caracter = $frase[$i];

        if ($caractrer != ' ') {
            $palabra .= $caracter;
        } else {
            echo $palabra . PHP_EOL; //mostramos la palabra por pantalla si hay un espacio y la reiniciamos
            $palabra = "";
        }
    }

    if (!empty($palabra)) {
        echo $palabra . PHP_EOL; //mostramos la ultima palabra si acabo despues del bucle
    }
?>