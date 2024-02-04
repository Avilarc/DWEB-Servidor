<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$productos = cargar_productos_total();
$cat_json = json_encode(iterator_to_array($productos), true);
echo $cat_json;