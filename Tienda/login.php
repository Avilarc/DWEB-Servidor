<?php
require_once 'bd.php';
/*formulario de login habitual
si va bien abre sesión, guarda el nombre de usuario y redirige a princi pal.php
si va mal, mensaje de error*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST); // Debug line
    $nombre = $_POST['usuario'];
    $clave = $_POST['clave'];
    $tipoUsuario = $_POST['tipoUsuario'];
    $usu = comprobar_usuario($nombre, $clave, $tipoUsuario);
    //var_dump($usu); // Debug line
    if ( $usu === FALSE){
        $err = TRUE;
        $usuario = $_POST['usuario'];
    }else{
        session_start();
        
         // $usu tiene campos correo y codRes, correo
         $_SESSION['usuario'] =  $usu ;
         $_SESSION['carrito'] = [];
         if ($usu['role'] === 'admin') {
             header("Location: admin.php"); 
         } else {
             header("Location: categorias.php"); 
         }
         return;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <?php if(isset($_GET["redirigido"])){
        echo "<p>Haga login para continuar</p>";
        }?>

        <?php if(isset($err) and $err == TRUE){
        echo "<p> Revise usuario y contrasefia</p>"  ;
        } ?>

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
            <label for = "usuario">Usuario</label>
            <input value = "<?php if(isset($usuario))echo $usuario;?>" 
            id = "usuario" name = "usuario" type = "text">
            <label for = "clave">Clave</label>
            <input id = "clave" name = "clave" type = "password">
            <label for = "tipoUsuario">Tipo de Usuario</label>
            <select id = "tipoUsuario" name = "tipoUsuario">
                <option value = "admin">Administrador</option>
                <option value = "client">Cliente</option>
            </select>
            <input type = "submit">
        </form>
        <a href="registro.php">Registrarse</a>
        <p></p>
        <a href="actualiza.php">Has olvidado tu contraseña?</a>
    </body>
</html>
