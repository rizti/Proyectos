<?php

    require_once "../clases/registro.php";

    if (!empty($_REQUEST['usuario']) && !empty($_REQUEST['clave']) && !empty($_REQUEST['nombre']) && !empty($_REQUEST['apellidos']) && !empty($_REQUEST['correo'])) {
        $registro = new Registrarse($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['usuario'], $_REQUEST['clave'], $_REQUEST['correo']);

            if($registro->comprobarCorreo()==false){
                echo "false";
            }else{
                $registro->registrarUsuario();
            }
    } 
?>