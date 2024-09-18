<?php
require_once "clases/BBDD.php";



    class RecogerDatos{

//RECOGER EL NOMBRE 
        public function recogerNombre($idUs){
                $bd = new Bbdd("localhost", "root", "", "tfg");
                $result = $bd->consultarBD("SELECT Nombre FROM usuarios WHERE id='$idUs'");
                    if($datos=$result->fetch_assoc()){
                        return $datos['Nombre'];
                    }
                $bd->cerrarBD();
            }
//RECOGER APELLIDO

        public function recogerApellido($idUs){
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT Apellidos FROM usuarios WHERE id='$idUs'");
                if($datos=$result->fetch_assoc()){
                    return $datos['Apellidos'];
                }
            $bd->cerrarBD();
        }

        public function recogerNombre_Us($idUs){
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT Nombre_Us FROM usuarios WHERE id='$idUs'");
                if($datos=$result->fetch_assoc()){
                    return $datos['Nombre_Us'];
                }
            $bd->cerrarBD();
        }
        public function recogerClave($idUs){
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT clave FROM usuarios WHERE id='$idUs'");
                if($datos=$result->fetch_assoc()){
                    return hash('sha512',$datos['clave']);
                }
            $bd->cerrarBD();
        }
        public function recogerCorreo($idUs){
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT correo FROM usuarios WHERE id='$idUs'");
                if($datos=$result->fetch_assoc()){
                    return $datos['correo'];
                }
            $bd->cerrarBD();
        }
    }
?>