
<?php
require_once "clases/BBDD.php";


class MostrarListas{

    public function cantidadLista(){
        $usuario=$_SESSION['idUs'];
        $arrayTitulos=[];
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT distinct ref_titulo_manga FROM listas WHERE ref_id_us='$usuario' ");
           while( $manga = $result->fetch_assoc()){
                array_push($arrayTitulos, $manga['ref_titulo_manga']);
           }
           return $arrayTitulos;
        $bd->cerrarBD();
    }
    
    public function mostrarImagen($titulo){
        $usuario=$_SESSION['idUs'];
            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT M.Imagen as Imagen ,M.titulo as titulo FROM listas L, mangainfo M,usuarios U WHERE L.ref_titulo_manga=M.titulo AND L.ref_id_us=U.id AND L.ref_id_us='$usuario' AND L.ref_titulo_manga='$titulo'");
            $manga = $result->fetch_assoc()
                ?><a href="manga.php?titulo=<?php echo $manga['titulo']; ?>"> <img width="200px" height="260px" src="data:image/jpeg;base64,<?php echo($manga['Imagen'])?>"></a>
              <?php 
            $bd->cerrarBD();
        }

}