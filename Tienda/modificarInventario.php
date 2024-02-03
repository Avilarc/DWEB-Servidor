<?php
    require 'sesiones.php';
    require_once 'bd.php';
    comprobar_sesion();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Pagina Administrador</title>
    </head>
    <body>
        <?php require 'adminCabecera.php';?>
        <h1>Página Administrador</h1>
        <?php
            $inventario = cargar_inventario();

            if ($inventario === FALSE)   {
                echo "<p class='error'>Error al conectar con la base datos</p> " ;
            } else {
                echo "<h2>Lista de productos</h2>";
                echo "<table border='1'>";
                foreach($inventario as $producto) {
                    $categoria = cargar_nombre_categoria($producto['idCategoria'])[0];
                    echo "<tr><td>".$producto['idProductos'].
                    "</td><td>".$producto['nombre'].
                    "</td><td>".$producto['precio'].
                    "</td><td>".$producto['stock'].
                    "</td><td>".$producto['descripcion'].
                    "</td><td>".$categoria. "(". $producto['idCategoria'] .")" . 
                    "</td><td>
                    <form action='eliminar_producto.php' method='post'>
                        <input type='hidden' name='id' value='".$producto['idProductos']."'>
                        <input type='submit' value='Eliminar'>
                    </form>
                    </td></tr>";
                }
                echo "<tr><form action='procesarInventario.php' method='post'>
                <td><label for='productoId'>ID del Producto:</label><br>
                <input type='text' id='productoId' name='productoId'></td>
                <td><label for='nombre'>Nombre:</label><br>
                <input type='text' id='nombre' name='nombre'></td>
                <td><label for='precio'>Precio:</label><br>
                <input type='text' id='precio' name='precio'></td>
                <td><label for='stock'>Stock:</label><br>
                <input type='text' id='stock' name='stock'></td>
                <td><label for='descripcion'>Descripción:</label><br>
                <input type='text' id='descripcion' name='descripcion'></td>
                <td><label for='categoria'>IdCategoría:</label><br>
                <input type='text' id='categoria' name='categoria'></td>
                <tr><input type='submit' value='Submit'></tr>
                </form></tr>";

                echo "</table>";
            }
        ?>
            
    </body>
</html>