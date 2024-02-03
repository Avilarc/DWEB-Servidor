<?php
    require 'sesiones.php'; 
    require_once 'bd.php'; 
    comprobar_sesion();
    $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
    dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

    $clienteId = $_POST['clienteId'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

    $ins = "SELECT * FROM cliente WHERE idCliente = '$clienteId'";
    $result = $bd -> query($ins);

    if ($result -> rowCount() > 0) {
        $query = "UPDATE cliente SET correo = '$correo', contraseña = '$clave', nombre = '$nombre', direccion = '$direccion' 
        WHERE idCliente = '$clienteId'";
        $result = $bd -> query($query);
    } else {
        $query = "INSERT INTO cliente (correo, contraseña, nombre, direccion) 
        values ('$correo', '$clave', '$nombre', '$direccion')";
        $result = $bd -> query($query);
    }

    if($result === FALSE) {
        echo "<p class='error'>Error al conectar con la base datos</p> " ;
    } else {
        header("Location: modificarUsuarios.php");
    }
?>