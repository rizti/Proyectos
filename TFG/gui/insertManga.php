<?php
require_once "../clases/classInsertarManga.php";
if (!empty($_REQUEST['titulo']) && !empty($_REQUEST['genero1']) && !empty($_REQUEST['genero2'])  && !empty($_REQUEST['genero3']) && !empty($_REQUEST['descripcion']) 
&& !empty($_REQUEST['estilo']) && !empty($_FILES) &&  !empty($_REQUEST['generoPrimario']) && !empty($_REQUEST['amateur'])&& !empty($_REQUEST['erotico'])) {

     $manga = new Manga($_REQUEST['titulo'], $_REQUEST['genero1'],$_REQUEST['genero2'], $_REQUEST['genero3'],$_REQUEST['descripcion'],$_REQUEST['estilo'],
     $_FILES['foto']['tmp_name'],$_REQUEST['generoPrimario'], $_REQUEST['amateur'], $_REQUEST['erotico']);
    
     if($manga->comprobarNombre()==true){
        echo ("False");
    }else{
        $manga->insertarManga();
        $manga->insertarIdManga();
    }

}
?>