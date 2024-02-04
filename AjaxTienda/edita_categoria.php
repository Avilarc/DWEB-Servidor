<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$codCat = $_POST['codCate'];
$nombre = $_POST['nombre'];
actualizar_categoria($codCat, $nombre);