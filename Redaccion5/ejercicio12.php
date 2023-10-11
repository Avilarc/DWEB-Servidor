<?php
    /**
     * 12. Realizar una aplicación que nos pida una cantidad de euros y convierta su valor a pesetas
     */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Euros a Pesetas</title>
</head>
    <body>
        <h1>Conversor de Euros a Pesetas</h1>
        <form method="post">
            Ingresa la cantidad en euros: <input type="text" name="euros"><br>
            <input type="submit" value="Convertir a Pesetas">
        </form>

        <?php
            if (isset($_POST['euros'])) {
                $euros = $_POST['euros'];

                if (is_numeric($euros) && $euros >= 0) {
                    $pesetas = $euros * 166.386;

                    echo "$euros euros son $pesetas pesetas.";
                } else {
                    echo "Por favor, ingresa una cantidad válida en euros (número mayor o igual a cero).";
                }
            }
        ?>
    </body>
</html>