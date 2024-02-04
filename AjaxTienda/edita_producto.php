<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$codProd = $_POST['codProd'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$codCate = $_POST['codCate'];
actualizar_producto($codProd, $nombre, $descripcion, $precio, $stock, $codCate);
