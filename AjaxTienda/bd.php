<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){
	   throw new InvalidArgumentException("Revise fichero de configuración");
	}
	$datos = simplexml_load_file($nombre);
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}
function comprobar_usuario($nombre, $clave){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $ins = "select codUsu, correo, contraseña, permisos from usuario where correo = :nombre";
    $stmt = $bd->prepare($ins);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->execute();
    $resul = $stmt->fetch(PDO::FETCH_ASSOC);
    if($resul && password_verify($clave, $resul['contraseña'])){
        return $resul;
    }else{
        return FALSE;
    }
}

function cargar_categorias(){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $ins = "select codCate, nombre from categorias";
    $resul = $bd->query($ins);
    if (!$resul) {
        return FALSE;
    }
    if ($resul->rowCount() === 0) {
        return FALSE;
    }
    return $resul;
}

function cargar_categoria($codCate){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $ins = "select nombre from categorias where codCate = $codCate";
    $resul = $bd->query($ins);
    if (!$resul) {
        return FALSE;
    }
    if ($resul->rowCount() === 0) {
        return FALSE;
    }
    return $resul->fetch();
}

function cargar_productos_categoria($codCate){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "select * from productos where codCate  = $codCate";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    if ($resul->rowCount() === 0) {
        return FALSE;
    }
    return $resul;
}

function cargar_productos($codigosProductos){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $texto_in = implode(",", $codigosProductos);
    if($texto_in==NULL) return FALSE;
    $ins = "select * from productos where codProd in($texto_in)";
    $resul = $bd->query($ins);
    if (!$resul) {
        return FALSE;
    }
    return $resul;
}

function insertar_pedido($carrito, $codUsu){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $bd->beginTransaction();
    $hora = date("Y-m-d", time());
    $sql = "insert into pedidos(fecha, codUsu) values('$hora', $codUsu)";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    $pedido = $bd->lastInsertId();
    foreach($carrito as $codProd=>$unidades){
        $sql = "insert into pedidoproducto(codPedi, codProd, unidades) values( $pedido, $codProd, $unidades)";
        $resul = $bd->query($sql);
        $sql1 = "update productos set stock=stock-$unidades where codProd=$codProd";
        $resul1 = $bd->query($sql1);
        if (!$resul || !$resul1) {
            $bd->rollback();
            return FALSE;
        }
    }
    $bd->commit();
    return $pedido;
}

function registrar_usuario($correo, $clave, $nombre, $direccion){
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "INSERT INTO usuario (nombre, direccion, correo, contraseña, permisos) VALUES (?, ?, ?, ?, ?)";
    $stmt= $bd->prepare($sql);
    $stmt->execute([$nombre, $direccion, $correo, password_hash($clave, PASSWORD_DEFAULT), 0]);
}

function cargar_categorias_total() {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "select * from categorias";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    if ($resul->rowCount() === 0) {
        return FALSE;
    }
    return $resul;
}

function cargar_usuarios_total() {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "select * from usuario";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    if ($resul->rowCount() === 0) {
        return FALSE;
    }
    return $resul;
}

function actualizar_categoria($codCat, $nombre) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "UPDATE categorias SET nombre=? WHERE codCate=?";
    $stmt = $bd->prepare($sql);
    $resul = $stmt->execute([$codCat, $nombre]);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function cargar_productos_total() {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "select * from productos";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    if ($resul->rowCount() === 0) {
        return FALSE;
    }
    return $resul;
}

function eliminar_categoria($codCat) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);
    $sql = "delete from categorias where codCate=$codCat";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function actualizar_usuario($codUsu, $nombre, $direccion, $correo, $contraseña, $permisos) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "UPDATE usuario SET nombre=?, direccion=?, correo=?, contraseña=?, permisos=? WHERE codUsu=?";
    $stmt = $bd->prepare($sql);
    $resul = $stmt->execute([$nombre, $direccion, $correo, $contraseña, $permisos, $codUsu]);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function eliminar_usuario($codUsu) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "delete from usuario where codUsu=$codUsu";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function actualizar_producto($codProd, $nombre, $descripcion, $precio, $stock, $codCate) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=?, codCate=? WHERE codProd=?";
    $stmt = $bd->prepare($sql);
    $resul = $stmt->execute([$nombre, $descripcion, $precio, $stock, $codCate, $codProd]);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function eliminar_producto($codProd) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "delete from productos where codProd=$codProd";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function anade_categoria($nombre) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "insert into categorias(nombre) values('$nombre')";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function anade_usuarios($nombre, $direccion, $correo, $contraseña, $permisos) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "insert into usuario(nombre, direccion, correo, contraseña, permisos) values('$nombre', '$direccion', '$correo', '$contraseña', $permisos)";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}

function anade_productos($nombre, $descripcion, $stock, $precio, $codCate) {
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0],$res[1],$res[2]);
    $sql = "insert into productos(nombre, descripcion, stock, precio, codCate) values('$nombre', '$descripcion',$precio, $stock, $codCate)";
    $resul = $bd->query($sql);
    if (!$resul) {
        return FALSE;
    }
    return TRUE;
}


