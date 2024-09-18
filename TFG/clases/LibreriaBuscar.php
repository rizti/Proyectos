<?php
require_once "clases/BBDD.php";



class MostrarBibliotecaBuscar{

    private $titulo;

    private function convertir($p) {
        return addslashes(trim(htmlspecialchars($p)));
    }

    public function __construct($titulo) {
        $this->titulo = $this->convertir($titulo);
    }


    public function Buscar(){
            $arrayTitulos=[];
            if($this->titulo!=""){
                $bd = new Bbdd("localhost", "root", "", "tfg");
                $result = $bd->consultarBD("SELECT distinct titulo FROM mangainfo WHERE titulo like '%{$this->titulo}%'");
                    while($manga = $result->fetch_assoc()){
                        if(isset($manga['titulo'])){
                            if(count($arrayTitulos)!=24){
                                array_push($arrayTitulos, $manga['titulo']);
                            }
                        }
                    }
                    if(count($arrayTitulos)==0){
                        ?>
                          
                        <?php
                    }else{
                        return $arrayTitulos;
                    }
                $bd->cerrarBD();
        }else{
            ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script src="./js/buscarManga.js"></script>
            <?php
        }
    }


    

    public function mostrarImagen($arrayTitles){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct titulo,Imagen FROM mangainfo WHERE  titulo='$arrayTitles' ");
            $manga = $result->fetch_assoc();
        ?>
            <a href="manga.php?titulo=<?php echo $manga['titulo']; ?>"> <img width="180px" height="300px" src="data:image/jpeg;base64,<?php echo($manga['Imagen'])?>"></a>
        <?php
        $bd->cerrarBD();
    }
    //MOSTRAR TITULO
    public function mostrarTitulo($arrayTitles){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct titulo FROM mangainfo WHERE  titulo='$arrayTitles'");
            $manga = $result->fetch_assoc();
            $arrayTitulo=str_split($arrayTitles);
            for($j=0;$j<count($arrayTitulo);$j++){
                echo ($arrayTitulo[$j]);
                if($j==19){
                    echo "...";
                    $j=count($arrayTitulo);
                }
            }
        
        $bd->cerrarBD();
    }
    //MOSTRAR ESTILO
    public function mostrarEstilo($arrayTitles){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct Estilo FROM mangainfo WHERE  titulo='$arrayTitles'");
            $manga = $result->fetch_assoc();
                return $manga['Estilo'];
        $bd->cerrarBD();
    }
    public function mostrarGeneroPrincipal($arrayTitles){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct genero_Primario FROM mangainfo WHERE  titulo='$arrayTitles'");
            $manga = $result->fetch_assoc();
                return $manga['genero_Primario'];
        $bd->cerrarBD();
    }



}

?>