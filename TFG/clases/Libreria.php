
<?php
require_once "clases/BBDD.php";
require_once ("gui/funcionGetNextPagina.php");


class MostrarBiblioteca{

    //MOSTRAR IMAGEN
    public function mostrarImagen($arrayPublicaciones){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct titulo,Imagen FROM mangainfo WHERE titulo='$arrayPublicaciones'");
            $manga = $result->fetch_assoc();
        ?>
            <a href="manga.php?titulo=<?php echo $manga['titulo']; ?>"> <img width="180px" height="300px" src="data:image/jpeg;base64,<?php echo($manga['Imagen'])?>"></a>
        <?php
        $bd->cerrarBD();
    }
    //MOSTRAR TITULO
    public function mostrarTitulo($arrayPublicaciones){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct titulo FROM mangainfo WHERE titulo='$arrayPublicaciones'");
            $manga = $result->fetch_assoc();
            $arrayTitulo=str_split($arrayPublicaciones);
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
    public function mostrarEstilo($arrayPublicaciones){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct Estilo FROM mangainfo WHERE titulo='$arrayPublicaciones'");
            $manga = $result->fetch_assoc();
                return $manga['Estilo'];
        $bd->cerrarBD();
    }
    public function mostrarGeneroPrincipal($arrayPublicaciones){
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct genero_Primario FROM mangainfo WHERE titulo='$arrayPublicaciones'");
            $manga = $result->fetch_assoc();
                return $manga['genero_Primario'];
        $bd->cerrarBD();
    }
        
}