<?php
    require 'sesiones.php';
    require_once 'bd.php';
    comprobar_sesion();

    $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
    dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

    $ins = "DELETE FROM productos WHERE idProductos = '$_POST[id]'";
    $resul = $bd->query($ins);
    if (!$resul) {
        echo "<p class='error'>Error al conectar con la base datos</p> " ;
    } else {
        echo "<p>Producto eliminado correctamente</p>";
    }
    echo "<a href='modificarInventario.php'>Volver</a>";
?>