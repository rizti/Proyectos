<?php
    session_start();
    require_once "../clases/inicioSesion.php";
    if (isset($_SESSION['usuario'])) {
        Login::cerrarSesion();
        header("Location: ../index.php");
    } else {
        header("Location: ../index.php");
    }
    
?>