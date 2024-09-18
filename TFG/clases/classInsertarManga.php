<?php

require_once "BBDD.php";

    class Manga {
        private $titulo;
        private $genero1;
        private $genero2;
        private $genero3;
        private $descripcion;
        private $estilo;
        private $imagen;
        private $generoPrimario;
        private $amateur;
        private $erotico;

        private function convertir($p) {
            return addslashes(trim(htmlspecialchars($p)));
        }

        public function __construct($titulo, $genero1, $genero2, $genero3,$descripcion,$estilo,$imagen,$generoPrimario,$amateur,$erotico) {
            $this->titulo = $this->convertir($titulo);
            $this->genero1 = $this->convertir($genero1);
            $this->genero2 = $this->convertir($genero2);
            $this->genero3 = $this->convertir($genero3);
            $this->descripcion = $this->convertir($descripcion);
            $this->estilo = $this->convertir($estilo);
            $this->imagen = $imagen;
            $this->generoPrimario = $this->convertir($generoPrimario);
            $this->amateur = $this->convertir($amateur);
            $this->erotico = $this->convertir($erotico);
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function getGenero1() {
            return $this->genero1;
        }
        public function getGenero2() {
            return $this->genero2;
        }
        public function getGenero3() {
            return $this->genero3;
        }
        public function descripcion() {
            return $this->descripcion;
        }
        public function estilo() {
            return $this->estilo;
        }
        public function imagen() {
            return $this->imagen;
        }
        public function generoPrimario() {
            return $this->generoPrimario;
        }
        public function amateur() {
            return $this->amateur;
        }
        public function erotico() {
            return $this->erotico;
        }


        private function imagenBinario() {
            $this->imagen = file_get_contents($this->imagen);
            $this->imagen = base64_encode($this->imagen);
            return $this->imagen;
        }

        public function insertarManga() {
            $imagenn = $this->imagenBinario();
            try {
                $bd = new Bbdd("localhost", "root", "", "tfg");
                if($bd->consultarBD("INSERT INTO mangainfo VALUES ('$this->titulo', '$this->genero1', '$this->genero2', '$this->genero3','$this->descripcion','$this->estilo','$imagenn',
                '$this->generoPrimario','$this->amateur','$this->erotico')")){
                    return true;
                }else{
                    return false;
                }

            } catch (mysqli_sql_exception $e) {
                throw $e;
            }
        }

        public function comprobarNombre() {
            if (!empty($this->titulo)) {
                try {
                    $bd = new Bbdd("localhost", "root", "", "tfg");
                    $result=$bd->consultarBD("SELECT titulo FROM mangainfo WHERE  titulo='$this->titulo'");
                    if ($result->num_rows == 1) {
                        return true;
                    }else{
                        return false;
                    }
                    $bd->cerrarBD();
                } catch (mysqli_sql_exception $e) {
                    return $e;
                }
                
            }
        }
        public function insertarIdManga(){
            try {
                $bd = new Bbdd("localhost", "root", "", "tfg");
                if($bd->consultarBD("INSERT INTO manga VALUES ('','$this->titulo')")){
                    return true;
                }else{
                    return false;
                }

            } catch (mysqli_sql_exception $e) {
                throw $e;
            }
        }
       
    }

?>