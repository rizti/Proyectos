<?php
require_once "BBDD.php";




class mostrarMangaEspe{

    private $titulo;



    private function convertir($p) {
        return addslashes(trim(htmlspecialchars($p)));
    }

    public function __construct($titulo) {
        $this->titulo = $this->convertir($titulo);
    }

    //MOSTRAR IMAGEN
    public function MostrarImagen(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT Imagen FROM mangainfo WHERE titulo='$this->titulo'");
            ?>
            <?php
            while ($manga = $result->fetch_assoc()) {
                         ?> <img id="ImagenPortadaMangaInt" width="250px" height="380px" src="data:image/jpeg;base64, <?php echo($manga['Imagen'])?> "> 
                <?php
            }
            $bd->cerrarBD();
    }


    //MOSTRAR TITULO MANGA
    public function MostrarTitulo(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT titulo FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['titulo'];
        }
        $bd->cerrarBD();
    }


    //MOSTRAR DESCRIPCION MANGA
    public function MostrarDescripcion(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT Descripcion FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                echo $manga['Descripcion'];
        }
        $bd->cerrarBD();
    }
    //MOSTRAR GENERO PRIMARIO MANGA
    public function MostrarGeneroPri(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT genero_Primario FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['genero_Primario'];
        }
        $bd->cerrarBD();
    }
    //MOSTRAR ESTILO PRINCIPAL MANGA
    public function MostrarEstilo(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT Estilo FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['Estilo'];
        }
        $bd->cerrarBD();
    }
    //MOSTRAR GENEROS MANGA
    public function MostrarGenero1(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT Genero1 FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['Genero1'];
        }
        $bd->cerrarBD();
    }

    public function MostrarGenero2(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT Genero2 FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['Genero2'];
        }
        $bd->cerrarBD();
    }

    public function MostrarGenero3(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT Genero3 FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['Genero3'];
        }
        $bd->cerrarBD();
    }

    //MOSTRAR SI ES AMATEUR
    public function Amateur(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT amateur FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['amateur'];
        }
        $bd->cerrarBD();
    }


    //MOSTRAR SI ES EROTICO
    public function Erotico(){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT erotico FROM mangainfo WHERE titulo='$this->titulo'");
        ?>
        <?php
        while ($manga = $result->fetch_assoc()) {
                return $manga['erotico'];
        }
        $bd->cerrarBD();
    }

}