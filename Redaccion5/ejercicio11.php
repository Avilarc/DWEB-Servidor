<?php
    /**
     * 11. Pedir dos palabras por teclado, indicar si son iguales.
     */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Comparar Dos Palabras</title>
    </head>
    <body>
        <h1>Comparar Dos Palabras</h1>
        <form method="post">
            Ingresa la primera palabra: <input type="text" name="palabra1"><br>
            Ingresa la segunda palabra: <input type="text" name="palabra2"><br>
            <input type="submit" value="Comparar">
        </form>

        <?php
            if (isset($_POST['palabra1']) && isset($_POST['palabra2'])) {
                $palabra1 = $_POST['palabra1'];
                $palabra2 = $_POST['palabra2'];

        
                if ($palabra1 === $palabra2) {
                    echo "Las dos palabras son iguales.";
                } else {
                    echo "Las dos palabras no son iguales.";
                }
            }
        ?>
    </body>
</html>