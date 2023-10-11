<?php
    /**
     * 1. Elaborar un programa que, usando el ejercicio del tema 2 de la calculadora, nos de la posibilidad de
     * realizar la suma de dos números.
     */

     include "operaciones.php";
     if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    
        $resultado = Sumar($num1, $num2);
    } else {
        $resultado = "Introduce dos números para sumar.";
    }
?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>Suma de Dos Números</title>
    </head>
    <body>
        <h1>Calculadora - Suma de Dos Números</h1>
        <form method="post">
            Número 1: <input type="text" name="num1"><br>
            Número 2: <input type="text" name="num2"><br>
            <input type="submit" value="Sumar">
        </form>

        <p>Resultado: <?php echo $resultado; ?></p>
    </body>
</html>
