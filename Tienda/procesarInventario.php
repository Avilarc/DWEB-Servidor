<?php

    require 'sesiones.php'; 
    require_once 'bd.php'; 
    comprobar_sesion();
    $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
    dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

    $productoId = $_POST['productoId'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $descipcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];

    $ins = "SELECT * FROM productos WHERE idProductos = '$productoId'";
    $result = $bd -> query($ins);
    if($result -> rowCount() > 0) {
        $query = "UPDATE productos SET nombre = '$nombre', precio = '$precio', stock = '$stock', descripcion = '$descipcion', idCategoria = '$categoria'
         WHERE idProductos = '$productoId'";
        $result = $bd -> query($query);

    } else {
        $query = "INSERT INTO productos (idProductos, nombre, precio, stock, descripcion, idCategoria) 
        VALUES ('$productoId', '$nombre', '$precio', '$stock', '$descipcion', '$categoria')";
        $result = $bd -> query($query);
    }

    if($result === FALSE) {
        echo "<p class='error'>Error al conectar con la base datos</p> " ;
    } else {
        header("Location: modificarInventario.php");
    }
?>