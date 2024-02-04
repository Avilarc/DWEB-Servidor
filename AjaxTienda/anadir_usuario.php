<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$permisos = $_POST['permisos'];
anade_usuarios($nombre, $direccion, $correo, $contraseña, $permisos);


