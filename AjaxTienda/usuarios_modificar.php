<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$usuarios = cargar_usuarios_total();
$usu_json = json_encode(iterator_to_array($usuarios), true);
echo $usu_json;