<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$codUsu = $_POST['codUsu'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$permisos = $_POST['permisos'];
actualizar_usuario($codUsu, $nombre, $direccion, $correo, $contraseña, $permisos);