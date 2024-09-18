<?php

require_once "../clases/BBDD.php";
session_start();
$idUs=$_SESSION['idUs'];
$TituloManga=$_SESSION['tituloManga'];


            try {
                $bd = new Bbdd("localhost", "root", "", "tfg");
                $result = $bd->consultarBD("SELECT ref_titulo_manga, ref_id_us FROM listas WHERE ref_titulo_manga='$TituloManga' AND ref_id_us='$idUs'");
                if ($result->num_rows == 1) {
                $bd->cerrarBD();
                    $bd = new Bbdd("localhost", "root", "", "tfg");
                    $result = $bd->consultarBD("DELETE FROM listas WHERE ref_titulo_manga='$TituloManga' AND ref_id_us='$idUs'");
                    $bd->cerrarBD();
                    echo false;
                } else{
                    echo "True";
                }
            }catch (mysqli_sql_exception $e) {
                throw $e;
                echo "True";
            }

?>