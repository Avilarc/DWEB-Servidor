<?php
    /**
     * Realiza un programa que use un fichero que contenga las funciones de las operaciones
     * básicas (suma, resta, multiplicación y división) y esté alojado en otro directorio
     * diferente. Este programa principal debe realizar un ejemplo de cada una de las
     * operaciones con los valores inicializados o pasados como parámetros.
     */

     include "operaciones/operaciones.php";

     $num1 = 7;
     $num2 = 25;

     echo sumar($num1,$num2);
     echo restar($num1,$num2);
     echo multiplicar($num1,$num2);
     echo dividir($num1,$num2);

?> *