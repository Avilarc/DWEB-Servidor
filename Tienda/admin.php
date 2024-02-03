<?php
    require 'sesiones.php';
    require_once 'bd.php';
    comprobar_sesion();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Pagina Administrador</title>
    </head>
    <body>
        <?php require 'adminCabecera.php';?>
        <h1>Página Administrador</h1>
        <nav>
            <ul>
                <li><a href="modificarUsuarios.php">Modificar Usuarios</a></li>
                <li><a href="modificarInventario.php">Modificar Inventario</a></li>
            </ul>
        </nav>
    </body>
</html>