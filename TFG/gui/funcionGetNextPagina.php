<?php


//FUNCIO PAGINA LIBRERIA
function getNextPagina($where){
$bd = new Bbdd("localhost", "root", "", "tfg");
$numero=16;
$mangas = [];
if ($bd) {
    $pag = $where * $numero;
    $sql = "SELECT DISTINCT titulo,Genero1 FROM mangainfo ORDER BY titulo LIMIT $pag," . $numero . " ";
    $rest = $bd->consultarBD($sql);
    while ($row = $rest->fetch_assoc()) {
        array_push ( $mangas , $row['titulo'] );
    }
}
$bd->cerrarBD();
return $mangas;
}


//FUNCION GENERO
function getNextPaginaGenero($where){
    $limpiacomentario= trim($_GET['genero']);
    $bd = new Bbdd("localhost", "root", "", "tfg");
    $numero=12;
    $mangas = [];
    if ($bd) {
        $pag = $where * $numero;
        $sql = "SELECT DISTINCT titulo,Genero1 FROM mangainfo WHERE (Genero1='$limpiacomentario' or Genero2= '$limpiacomentario' or Genero3='$limpiacomentario') ORDER BY titulo LIMIT $pag," . $numero . " ";
        $rest = $bd->consultarBD($sql);
        while ($row = $rest->fetch_assoc()) {
            array_push ( $mangas , $row['titulo'] );
        }
    }
    $bd->cerrarBD();
    return $mangas;
    }


//FUNCION MOSTRAR POR FORMULARIO
    function getNextPaginaFormulario($where){
        $generoPri=$_POST['generoPri'];
        $genero=$_POST['Genero'];
        $Erotico=$_POST['Erotico'];
        $Amateur=$_POST['Amateur'];
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $numero=30;
        $mangas = [];
        if ($bd) {
            $pag = $where * $numero;
            $sql = "SELECT DISTINCT titulo,genero_Primario FROM mangainfo WHERE genero_Primario='$generoPri' and amateur='$Amateur' and erotico='$Erotico' AND (Genero1='$genero' or Genero2='$genero' or Genero3='$genero') ORDER BY titulo LIMIT $pag," . $numero . " ";
            $rest = $bd->consultarBD($sql);
            while ($row = $rest->fetch_assoc()) {
                array_push ( $mangas , $row['titulo'] );
            }
        }
        $bd->cerrarBD();
        return $mangas;
        }




function contar($alu){
    $cnt=0;
    foreach ( $alu as $key => $val){
        if ($cnt++==0) $sel="selected"; else $sel="";
    }   
}

?>