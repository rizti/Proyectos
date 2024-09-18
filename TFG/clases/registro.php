<?php

    require_once "BBDD.php";

    class Registrarse {
        private $nombre;
        private $apellido;
        private $usuario;
        private $clave;
        private $correo;

        private function convertir($p) {
            return addslashes(trim(strip_tags($p)));
        }

        public function __construct($nombre,$apellido,$usuario, $clave,$correo) {
            $this->nombre = $this->convertir($nombre);
            $this->apellido = $this->convertir($apellido);
            $this->usuario = $this->convertir($usuario);
            $clave = $this->convertir($clave);
            $this->clave = hash('sha512', $clave);
            $this->correo= $this->convertir($correo);
        }

        public function registrarUsuario() {
                try {
                    $bd = new Bbdd("localhost", "root", "", "tfg");
                    $bd->consultarBD("INSERT INTO usuarios VALUES (NULL, '{$this->nombre}','{$this->apellido}','{$this->usuario}', '{$this->clave}', 'A', '{$this->correo}')");
                    $bd->cerrarBD();
                } catch (mysqli_sql_exception $e) {
                    return $e;
                }
        }
        
        public function comprobarCorreo() {
            if (!empty($this->correo)) {
                try {
                    $bd = new Bbdd("localhost", "root", "", "tfg");
                    $result=$bd->consultarBD("SELECT correo FROM usuarios WHERE  correo='$this->correo'");
                    if ($result->num_rows == 1) {
                        return false;
                    }else{
                        return true;
                    }
                    $bd->cerrarBD();
                } catch (mysqli_sql_exception $e) {
                    return $e;
                }
                
            }
        }
    }

?>