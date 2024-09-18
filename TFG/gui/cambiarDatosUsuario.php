<?php
    session_start();
    require_once "../clases/cambiarDatosUsuario.php";
    $idUs=$_SESSION['idUs'];

    if(!empty($_REQUEST['nombreUsuario']) && !empty($_REQUEST['clave'])){
        $cambiarDatos = new cambiarDatosUsuario($_REQUEST['nombreUsuario'],$_REQUEST['clave']);
        $cambiarDatos->modificarDatos($idUs);
        $cambiarDatos->cambiarUsuario($idUs);    
    } 
?>