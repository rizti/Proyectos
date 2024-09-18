<?php
session_start();
require_once "../clases/BBDD.php";

    $_SESSION['titulo'];
    $tituloAntes=$_SESSION['titulo'];
    $titulo=$_REQUEST['titulo'];
    $genero1=$_REQUEST['genero1'];
    $genero2=$_REQUEST['genero2'];
    $genero3=$_REQUEST['genero3'];
    $descripcion=$_REQUEST['descripcion'];
    $estilo=$_REQUEST['estilo'];
    $generoPrimario=$_REQUEST['generoPrimario'];
    $amateur=$_REQUEST['amateur'];
    $erotico=$_REQUEST['erotico'];


    if (!empty($_REQUEST['titulo']) && !empty($_REQUEST['genero1']) && !empty($_REQUEST['genero2'])  && !empty($_REQUEST['genero3']) && !empty($_REQUEST['descripcion']) 
    && !empty($_REQUEST['estilo']) && !empty($_REQUEST['generoPrimario']) && !empty($_REQUEST['amateur'])&& !empty($_REQUEST['erotico'])) {

        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT titulo FROM mangainfo WHERE titulo='$titulo'");
            if ($result->num_rows == 1) {
                echo ("False");
                $bd->cerrarBD();
            }else{
        $bd->cerrarBD();

            $bd = new Bbdd("localhost", "root", "", "tfg");
             $result = $bd->consultarBD("UPDATE mangainfo SET titulo = '$titulo',Genero1='$genero1', Genero2='$genero2', Genero3='$genero3', Descripcion='$descripcion',
            Estilo='$estilo', genero_Primario='$generoPrimario', amateur='$amateur' , erotico='$erotico' WHERE titulo = '$tituloAntes'");
             $bd->cerrarBD();

             $bd = new Bbdd("localhost", "root", "", "tfg");
             $result = $bd->consultarBD("UPDATE manga SET titulo = '$titulo' WHERE titulo = '$tituloAntes' ");
             $bd->cerrarBD();

             $bd = new Bbdd("localhost", "root", "", "tfg");
             $result = $bd->consultarBD("UPDATE listas SET ref_titulo_manga = '$titulo' WHERE ref_titulo_manga = '$tituloAntes' ");
             $bd->cerrarBD();

             echo("True");
        }
    }
    else{
        echo("False");
    }
?>