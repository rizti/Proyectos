<?php

    session_start();
    require_once "../clases/inicioSesion.php";

    if (!empty($_REQUEST['usuario']) && !empty($_REQUEST['clave'])) {
        $us = $_REQUEST['usuario'];
        $clave = $_REQUEST['clave'];
        $clave = hash('sha512', $clave);

        $login = new Login($us, $clave);
        if ($login->iniciarSesion()) {
            echo "True";
        } else {
           echo "False";
        }
    } else {
        echo "False";
    }

?>