<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$codProd = $_POST['codProd'];
eliminar_producto($codProd);