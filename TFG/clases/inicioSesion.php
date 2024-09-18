<?php
    require_once "BBDD.php";
    require_once "registro.php";
    class Login { 
        private $usuario;
        private $clave;

        private function convertir($p) {
            return addslashes(trim(htmlspecialchars($p)));
        }

        public function __construct($usuario, $clave) {
            $this->usuario = $this->convertir($usuario);
            $this->clave = $this->convertir($clave);
        }

        private function checkUsuario() {
            if (!empty($this->usuario)) {
                return true;
            } else {
                return false;
            }
        }

        private function checkClave() {
            if (!empty($this->clave)) {
                return true;
            } else {
                return false;
            }
        }

        public function iniciarSesion() {
            if ($this->checkUsuario() && $this->checkClave()) {
                $bd = new Bbdd("localhost", "root", "", "tfg");
                $result = $bd->consultarBD("SELECT Nombre_Us, clave, correo,id FROM usuarios WHERE correo = '$this->usuario' AND clave = '$this->clave'");
                if ($result->num_rows == 1) {
                    $fila = $result->fetch_assoc();
                    $_SESSION['usuario']=$fila['Nombre_Us'];
                    $_SESSION['idUs']=$fila['id'];
                    return $fila;
                } else {
                    return false;
                }
                $bd->cerrarBD();
            }
        }

        public static function cerrarSesion() {
            if (!empty($_SESSION['usuario'])) {
                session_destroy();
            }
        }


    }
?>