<?php

function obtener_permisos() {
    require 'sesiones_json.php';
    if(!comprobar_sesion()) return;
    return intval($_SESSION['usuario']['permisos']);
}

echo obtener_permisos();
