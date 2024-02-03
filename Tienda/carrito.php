<?php
/*comprueba que el usuario haya abierto sesión o redirige*/ 
require_once 'sesiones.php';
require_once 'bd.php'; 
comprobar_sesion();
?>
<!DOCTYPE htrnl>
<html>
<head>
<meta charset = ªUTF-8ª>
<title>Carrito de la cornpra </title>
</head>
<body>
    <?php
    require 'cabecera.php';
    echo "<h2>Carrito de la compra</h2>";
    $productos = cargar_productos(array_keys($_SESSION['carrito'])); 
    if($productos === FALSE){
        echo "<p>No hay productos en el pedido</p>"; 
        exit;
    }

    echo "<h2>Carrito de la compra</h2>"; 
    echo "<table>"; //abrir la tabla
    echo "<tr><th>Nombre</th><th>Descripción</th><th>Precio</th>
    <th>Unidades</th><th>Elirninar</th></tr>"; 
    foreach  ( $productos as $producto){
        $cod = $producto['idProductos'];
        $nom = $producto['Nombre'];
        $precio = $producto['Precio'];
        $stock =  $producto['Stock'];
        $des =  $producto['Descripcion'];
        $unidades = $_SESSION['carrito'][$cod];

        echo "<tr><td>$nom</td><td>$des</td><td>$precio</td><td>$unidades</td>
        <td>
            <form action = 'eliminar.php' method = 'POST'>
            <input name = 'unidades' type = 'number' min = '1' value = '1'
            max = '$unidades'>
            <input type = 'submit' value='Eliminar'></td> 
            <input name= 'cod' type='hidden' value ='$cod'>
            </form>
        </td>
        </tr>";
    }
    echo "</table>";
    ?>
    <hr>
    <a href="procesar_pedido.php">Realizar pedido</a>
</body>
</html>
