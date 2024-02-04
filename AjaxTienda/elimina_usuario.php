<?php
require_once 'sesiones_json.php';
require_once 'bd.php';
if(!comprobar_sesion()) return;
$codUsu = $_POST['codUsu'];
eliminar_usuario($codUsu);
