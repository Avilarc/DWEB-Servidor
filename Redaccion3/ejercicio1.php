<?php
    /**
     * Realiza un programa con una función que calcule una ecuación de segundo grado, ax2 +
     * bx + c = 0 (las variables se inicializan de forma aleatoria o en el paso de parametros). Si
     * la ecuación no tiene solución debe devolver un mensaje de error.
     */

    function calculoSegundo($a,$b,$c) {
        $menosb = $b * -1;
        $oper1 = pow($b,2);
        $oper2 = 4 * $a * $c;
        $oper3 = pow($a,2);
        $oper4 = sqrt($oper1 - $oper2);

        $result1 = round(($menosb + $oper4) / $oper3);
        $result2 = round(($menosb - $oper4) / $oper3);

        $resultadoFinal = array($result1,$result2);

        return $resultadoFinal;


    }


    echo calculoSegundo(4,2,1);
?>