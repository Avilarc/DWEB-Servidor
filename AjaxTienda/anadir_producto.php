<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$codCate = $_POST['codCate'];
anade_productos($nombre, $descripcion, $precio, $stock, $codCate);
