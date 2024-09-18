<?php

require_once "BBDD.php";
class cambiarDatosUsuario{
    private $NombreUs;
    private $clave1;

    private function convertir($p) {
        return addslashes(trim(htmlspecialchars($p)));
    }

    public function __construct($NombreUs,$clave1) {
        $this->nombreUs = $this->convertir($NombreUs);
        $clave1 = $this->convertir($clave1);
        $this->clave1 = hash('sha512', $clave1);
    }


    public function modificarDatos($idUs){
        try {
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $bd->consultarBD("UPDATE usuarios SET Nombre_Us='{$this->nombreUs}',clave='{$this->clave1}' WHERE id='$idUs'");
            $bd->cerrarBD();
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }
    public function cambiarUsuario($idUs) {
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT Nombre_Us FROM usuarios WHERE id='$idUs'");
            if ($result->num_rows == 1) {
                $fila = $result->fetch_assoc();
                $_SESSION['usuario']=$this->nombreUs;
            }
            $bd->cerrarBD();
        }
    }
?>