<?php
    function leer_configuracion($nombre, $esquema) {
        $config = new DOMDocument();
        $config -> load($nombre);
        $res = $config -> schemaValidate($esquema);
        if ($res === FALSE) {
            throw new InvalidArgumentException("Revise fichero de configuración");
        }
        $datos = simplexml_load_file($nombre);
        $ip = $datos -> xpath("//ip");
        $nombre = $datos -> xpath("//nombre");
        $usu = $datos -> xpath("//usuario");
        $clave = $datos -> xpath("//clave");
        $cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
        $resul = [];
        $resul[] = $cad;
        $resul[] = $usu[0];
        $resul[] = $clave[0];
        return $resul;
    }

    function comprobar_usuario($nombre, $clave, $tipoUsuario) {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);

        if ($tipoUsuario === 'admin') {
            $ins = "SELECT idAdministrador, correo, contraseña from administrador WHERE correo=:nombre";
            $stmt = $bd->prepare($ins);
            $stmt->execute([':nombre' => $nombre]);
            if($stmt->rowCount() === 1) {
                $admin = $stmt->fetch();
                if (password_verify($clave, $admin['contraseña'])) {
                    return ['user' => $admin, 'role' => 'admin', 'correo' => $admin['correo']];
                }
            }
        } else if ($tipoUsuario === 'client') {
            $ins = "SELECT idCliente, correo, contraseña from cliente WHERE correo=:nombre";
            $stmt = $bd->prepare($ins);
            $stmt->execute([':nombre' => $nombre]);
            if($stmt->rowCount() === 1) {
                $cliente = $stmt->fetch();
                if (password_verify($clave, $cliente['contraseña'])) {
                    return ['user' => $cliente, 'role' => 'client', 'codCliente' => $cliente['idCliente']];
                }
            }
        }
    
        return FALSE;
    }

    function Update($nombre, $clave, $tipoUsuario) {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);
        if ($tipoUsuario === 'admin') {
            $ins = "UPDATE administrador SET contraseña='$clave_encriptada' WHERE correo='$nombre'";
        } else if ($tipoUsuario === 'client') {
            $ins = "UPDATE cliente SET contraseña='$clave_encriptada' WHERE correo='$nombre'";
        } else {
            return FALSE; // Tipo de usuario no válido
        }
        $resul = $bd -> exec($ins);
        if($resul === 1) {
            return TRUE;
        }
        
        return FALSE;
    }

    function register($nombre, $clave, $correo) {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);
        $ins = "INSERT INTO cliente (nombre, contraseña, correo) VALUES ('$nombre', '$clave_encriptada', '$correo')";
        $resul = $bd -> exec($ins);
        if($resul === 1) {
            return TRUE;
        }
        
        return FALSE;
    }

    function cargar_categorias() {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $ins = "SELECT idCategoria, nombre from categoria";
        $resul = $bd -> query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul;
    }

    function cargar_categoria($codCat){
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $ins = "SELECT nombre from productos WHERE idCategoria = '$codCat'";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul -> fetch();
    }

    function cargar_productos_categoria($codCat){
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $ins = "SELECT idProductos, Nombre, Precio, Stock, Descripcion, idCategoria from productos WHERE idCategoria = '$codCat' AND stock > 0";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul;
    }

    function cargar_productos($codProd) {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $texto_in = implode(",", $codProd);
        if($texto_in == NULL) return FALSE;
        $ins = "SELECT * from productos WHERE idProductos in ($texto_in)";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        return $resul;
    }

    function insertar_pedido($carrito, $codCliente) {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $bd->beginTransaction();

        $hora = date('Y-m-d H:i:s');
        $ins = "INSERT into pedido(fecha, idCliente) values ('$hora', $codCliente)";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }

        $pedido = $bd -> lastInsertId();
        foreach ($carrito as $codProd => $unidades) {
            $ins = "INSERT into pedidoproducto (idPedido, idProducto, Unidades)
            values ($pedido, $codProd, $unidades)";
            $resul = $bd -> query($ins);
            $ins = "UPDATE productos set stock = stock - $unidades WHERE idProductos = $codProd";
            $resul2 = $bd -> query($ins);
            if (!$resul || !$resul2) {
                $bd -> rollBack();
                return FALSE;
            }


        }
        $bd -> commit();
        return $pedido;
    }

    function cargar_clientes() {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);

        $ins = "SELECT idCliente, nombre, direccion, correo, contraseña from cliente";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul;
    }

    function cargar_admin() {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);

        $ins = "SELECT idAdministrador, nombre, direccion, correo, contraseña from administrador";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul;
    }

    function cargar_inventario() {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);

        $ins = "SELECT idProductos, nombre, precio, stock, descripcion, idCategoria from productos";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul;
    }

    function cargar_nombre_categoria($id) {
        $res = leer_configuracion(dirname(__FILE__)."/configuracion.xml",
        dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);

        $ins = "Select nombre from categoria where idCategoria = $id";
        $resul = $bd->query($ins);
        if (!$resul) {
            return FALSE;
        }
        if($resul -> rowCount() === 0) {
            return FALSE;
        }
        return $resul -> fetch();
    }
?>
