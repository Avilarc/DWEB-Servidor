<?php
require_once 'bd.php';

$correo = $_POST['usuario'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];

if(empty($correo) || empty($clave)) {
    echo "Usuario o contraseña vacíos";
    exit();
}

registrar_usuario($correo, $clave, $nombre, $direccion);

echo "Usuario registrado con éxito";

