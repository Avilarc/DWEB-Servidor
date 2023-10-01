<?php
    /**
     * Realiza un programa que, con una cadena inicializada, nos cambie su contenido a
     * mayúsculas o minúsculas dependiendo del valor de otra variable, es decir, si la variable
     * opción vale 0 pase a minúsculas y si su valor es otro pase la cadena a mayúsculas. Para
     * la realización de este ejercicio se debe recorrer la cadena analizando cada palabra, no se
     * puede usar el comando strtoupper ni strtolower.
     */

     $frase = "Cualquier cosa que hagas va a estar bien";

     $opcion = 1;


    function convertirMayusculas($caracter) {
        if ($caracter >= 'a' && $caracter <= 'z') {
            return chr(ord($caracter) - ord('a') + ord('A'));
        }
        return $caracter;
    }

    function convertirMinusculas($caracter) {
        if ($caracter >= 'A' && $caracter <= 'Z') {
            return chr(ord($caracter) - ord('A') + ord('a'));
        }
        return $caracter;
    }

    function procesarCadena($frase, $opcion) {
        $resultado = '';

        for ($i=0; $i < strlen($frase); $i++) { 
            $caracter = $frase[$i];

            if ($opcion == 0) {
                $caracter = convertirMinusculas($caracter);
            } else {
                $caracter = convertirMayusculas($caracter);
            }
            $resultado .= $caracter;
        }
        return $resultado;
    }


    $nuevaFrase = procesarCadena($frase, $opcion);

    echo $nuevaFrase;
?>