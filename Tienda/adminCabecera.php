<?php
    // Iniciar la sesión si no está iniciada
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Comprobar si la variable de sesión 'usuario' está establecida
    if(isset($_SESSION['usuario'])) {
        $user = $_SESSION['usuario']['user']['correo'];
    } else {
        // Redirigir al usuario a la página de inicio de sesión
        header("Location: login.php");
        exit;
    }
?>
<header>
    Admin: <?php echo $_SESSION['usuario']['correo']; echo "<br>"?>
    <a href="admin.php">Home</a>
    <a href="logout.php">Cerrar sesión</a>  
</header>
<hr>