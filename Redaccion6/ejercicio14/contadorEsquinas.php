<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado</h1>

        <?php
            $filas = intval($_POST['filas']);
            $matriz = explode("\n", $_POST['matriz']);

            if ($filas % 2 != 1) {
                echo "El número de filas debe ser impar.";
            } else {
                $contador = 0;

                $valor_central = intval(trim($matriz[($filas - 1) / 2]));

                for ($i = 0; $i < $filas; $i++) {
                    $fila = explode(" ", trim($matriz[$i]));
                    for ($j = 0; $j < $filas; $j++) {
                        if (($i == 0 || $i == $filas - 1) && ($j == 0 || $j == $filas - 1)) {
                            if (intval($fila[$j]) === $valor_central) {
                                $contador++;
                            }
                        }
                    }
                }

                echo "Número de esquinas iguales al valor central: " . $contador;
            }
        ?>
    </body>
</html>
