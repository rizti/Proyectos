<?php

    class Bbdd {
        private $conexion;

        public function __construct($host, $usuario, $clave, $bbdd) {
            try {
                $this->conexion = new mysqli($host, $usuario, $clave, $bbdd);
            }
            catch (mysqli_sql_exception $e) {
                throw $e;
            }

        }

        public function consultarBD($consulta) {
            try {
                $result = $this->conexion->query($consulta);
                return $result;
            }
            catch(Exception $e) {
                $e->getMessage();
                return $e;
            }
        }

        public function cerrarBD() {
            $this->conexion->close();
        }
    }

?>