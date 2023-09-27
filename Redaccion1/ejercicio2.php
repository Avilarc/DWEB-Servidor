<?php
    /**
     * Realiza un programa que teniendo las tres notas de los exámenes, nos muestre por
     *pantalla si su media le sale aprobado.
     */

    function calcularMedia($nota1, $nota2, $nota3){
        return ($nota1 + $nota2 + $nota3) / 3;
    }

    function estaAprobado($media) {
        if ($media >=5) {
            echo `Tiene una media total de: ${media} por lo que está aprobado`;
        } else {
            echo `Tiene una media total de: ${media} por lo que no está aprobado`;
        }
    }

     $nota1 = 5;
     $nota2 = 3;
     $nota3 = 10;
     $media = calcularMedia($nota1, $nota2, $nota3);
?>