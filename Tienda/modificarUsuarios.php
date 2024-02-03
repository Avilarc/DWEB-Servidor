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
        <?php
            $administradores = cargar_admin();
            

            if ($administradores === FALSE)   {
                echo "<p class='error'>Error al conectar con la base datos</p> " ;
            } else {
                echo "<h2>Lista de administradores</h2>";
                echo "<table border='1'>"; 
                foreach($administradores as $admin) {
                    echo "<tr><td>".$admin['idAdministrador'].
                    "</td><td>".$admin['nombre'].
                    "</td><td>".$admin['direccion'].
                    "</td><td>".$admin['correo'].
                    "</td><td>".$admin['contraseña'].
                    "</td></tr>";
                }
                echo "<tr><form action='procesarAdmin.php' method='post'>
                <td><label for='adminId'>ID del Admin:</label><br>
                <input type='text' id='adminId' name='adminId'></td>
                <td><label for='nombre'>Nombre:</label><br>
                <input type='text' id='nombre' name='nombre'></td>
                <td><label for='direccion'>direccion:</label><br>
                <input type='text' id='direccion' name='direccion'></td>
                <td><label for='correo'>correo:</label><br>
                <input type='text' id='correo' name='correo'></td>
                <td><label for='contraseña'>Contraseña:</label><br>
                <input type='password' id='contraseña' name='contraseña'></td>
                <tr><input type='submit' value='Submit'></tr>
                </form></tr>";

                echo "</table>";
            }
        
            $clientes = cargar_clientes();
            
            if ($clientes === FALSE)   {
                echo "<p class='error'>Error al conectar con la base datos</p> " ;
            } else {
                echo "<h2>Lista de clientes</h2>";
                echo "<table border='1'>";
                foreach($clientes as $cliente) {
                    echo "<tr><td>".$cliente['idCliente'].
                    "</td><td>".$cliente['nombre'].
                    "</td><td>".$cliente['direccion'].
                    "</td><td>".$cliente['correo'].
                    "</td><td>".$cliente['contraseña'].
                    "</td></tr>";
                }
                echo "<tr><form action='procesarCliente.php' method='post'>
                <td><label for='clienteId'>ID del Cliente:</label><br>
                <input type='text' id='clienteId' name='clienteId'></td>
                <td><label for='nombre'>Nombre:</label><br>
                <input type='text' id='nombre' name='nombre'></td>
                <td><label for='direccion'>direccion:</label><br>
                <input type='text' id='direccion' name='direccion'></td>
                <td><label for='correo'>correo:</label><br>
                <input type='text' id='correo' name='correo'></td>
                <td><label for='contraseña'>Contraseña:</label><br>
                <input type='password' id='contraseña' name='contraseña'></td>
                <tr><input type='submit' value='Submit'></tr>
                </form></tr>";

                echo "</table>";
            }
        ?>
    </body>
</html>