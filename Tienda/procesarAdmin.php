<?php
    require 'sesiones.php'; 
    require_once 'bd.php'; 
    comprobar_sesion();
    $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
    dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

    $adminId = $_POST['adminId'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $clave = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    $ins = "SELECT * FROM administrador WHERE idAdministrador = '$adminId'";
    $result = $bd -> query($ins);
    if($result -> rowCount() > 0) {
        $query = "UPDATE administrador SET correo = '$correo', contraseña = '$clave', nombre = '$nombre', direccion = '$direccion' 
        WHERE idAdmin = '$adminId'";
        $result = $bd -> query($query);

    } else {
        $query = "INSERT INTO administrador (correo, contraseña, nombre, direccion) 
        values ('$correo', '$clave', '$nombre', '$direccion')";
        $result = $bd -> query($query);
    }

    if($result === FALSE) {
        echo "<p class='error'>Error al conectar con la base datos</p> " ;
    } else {
        header("Location: modificarUsuarios.php");
    }
?>