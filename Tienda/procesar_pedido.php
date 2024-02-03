<?php
/*comprueba que el usuario haya abierto sesión o redirige*/ 
require 'sesiones.php'; 
require_once 'bd.php'; 
comprobar_sesion();

?>
<!DOCTYPE html>
    <html>
    <head>
    <meta charset = "UTF-8">
    <title>Pedidos</title>
    </head>
    <body>
        <?php
        require 'cabecera.php';
        $resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']['codCliente']);
        if ( $resul === FALSE){
            echo "No se ha podido realizar el pedido<br>";
        }else{
            if (!isset($_SESSION['carrito'])) {
                $_SESSION['carrito'] = [];
            }
            $compra = $_SESSION['carrito'];
            $productos = cargar_productos(array_keys($compra));
            $precio_total = 0;
            echo "Pedido realizado correctamente<br>";
            echo "<h1>Pedido nº $resul </h1>";
            echo "<table>";
            echo "<tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Unidades</th></tr>";
            foreach ($productos as $producto) {
                $cod = $producto['idProductos'];
                $nom = $producto['Nombre'];
                $precio = $producto['Precio'];
                $stock =  $producto['Stock'];
                $des =  $producto['Descripcion'];
                $unidades = $_SESSION['carrito'][$cod];
                $precio_total += $precio * $unidades;
                echo "<tr><th>$nom</th><th>$des</th><th>$precio</th><th>$unidades</th></tr>";
            }
            echo "</table>";
            echo "<h2>El precio total es: $precio_total </h2>";

            $_SESSION['carrito'] = [];
        }
        ?>
    </body>
</html>
