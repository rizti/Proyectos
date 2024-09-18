<?php
require_once "./clases/BBDD.php";

function mostrarModiPortada($arrayPublicaciones){
$bd = new Bbdd("localhost", "root", "", "tfg");
$result = $bd->consultarBD("SELECT * FROM mangainfo WHERE titulo='$arrayPublicaciones'");
    $manga = $result->fetch_assoc() 
     ?>
     </br>
        <img width="230px" height="300px" src="data:image/jpeg;base64,<?php echo($manga['Imagen'])?>">
<?php
 $bd->cerrarBD();
}



function mostrarModiTitulo($arrayPublicaciones){
    $bd = new Bbdd("localhost", "root", "", "tfg");
    $result = $bd->consultarBD("SELECT * FROM mangainfo WHERE titulo='$arrayPublicaciones'");
        $manga = $result->fetch_assoc() 
         ?>
            <?php  print_r($manga['titulo']) ?></br>
    <?php
     $bd->cerrarBD();
}
function mostrarBoton($arrayPublicaciones){
    $bd = new Bbdd("localhost", "root", "", "tfg");
    $result = $bd->consultarBD("SELECT * FROM mangainfo WHERE titulo='$arrayPublicaciones'");
        $manga = $result->fetch_assoc() 
         ?>
           <a href="modificar2.php?titulo=<?php echo $manga['titulo'];?> ">
            <button class="btn btn-dark">MODIFICAR MANGA</button>
            </a></br></br> 
    <?php
     $bd->cerrarBD();
}
function contarTotalTitulos(){
    $arrayTitulos=[];
    $bd = new Bbdd("localhost", "root", "", "tfg");
    $result = $bd->consultarBD("SELECT distinct titulo FROM mangainfo");
     while ($manga = $result->fetch_assoc()) {
        array_push($arrayTitulos, $manga['titulo']);
     }
     return $arrayTitulos;
     $bd->cerrarBD();
}

//FUNCIONES PARA MOSTRAR2

function recogerTitulo($titulo){
    $bd = new Bbdd("localhost", "root", "", "tfg");
    $result = $bd->consultarBD("SELECT titulo FROM mangainfo WHERE titulo='$titulo'");
     $manga = $result->fetch_assoc();
     return $manga['titulo'];
     $bd->cerrarBD();
}
function recogerDescripcion($titulo){
    $bd = new Bbdd("localhost", "root", "", "tfg");
    $result = $bd->consultarBD("SELECT Descripcion FROM mangainfo WHERE titulo='$titulo'");
     $manga = $result->fetch_assoc();
     return $manga['Descripcion'];
     $bd->cerrarBD();
}


 ?>