<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$nombre = $_POST['nombre'];
anade_categoria($nombre);
