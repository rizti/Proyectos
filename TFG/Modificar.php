<head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<?php
 include_once ("./Menu\Footer/Menu.php");
 include_once ("gui/modificarMostrar.php");

$ArrayEncontrados=[];
$ArrayEncontrados=contarTotalTitulos();

?>
<div class="row justify-content-md-center" >
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12"><h1 id="TituloLista">MODIFICAR MANGA</h1></div>
        <div class="col-lg-12 col-md-12 col-sm-6">
            <div class="row">

<?php

for($i=0; $i<=count($ArrayEncontrados)-1;$i++){
  ?> <div class="col-lg-3 col-md-4 col-sm-12"><?php
    mostrarModiPortada($ArrayEncontrados[$i]);

    ?> <div class="tituloMangaModificar"> <?php mostrarModiTitulo($ArrayEncontrados[$i]); ?> </div>
    <div id="botonModi"> <?php mostrarBoton($ArrayEncontrados[$i]); ?> </div>
  </div>
 <?php   
 
 
}
?>
</div>
</div>
</div>
</div>

<?php include_once ("Menu\Footer/footer.php");
