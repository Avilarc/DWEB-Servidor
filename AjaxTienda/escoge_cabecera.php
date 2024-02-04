<?php
require 'sesiones_json.php';
if(!comprobar_sesion()) return;

$permisos = $_SESSION['usuario']['permisos'];
if ($permisos == 0) {
    // Incluye la cabecera para clientes
    require 'cabecera_json.php';
} elseif ($permisos == 1) {
    // Incluye la cabecera para administradores
    require 'cabecera_admin_json.php';
}
