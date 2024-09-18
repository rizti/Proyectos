<?php
require_once("Menu\Footer/Menu.php");
include_once ("clases/LibreriaBuscar.php");
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
</head>
<?php
   


    $BuscarTitulo=$_GET['title'];
    $ArrayEncontrados=[];
    $Buscar=new MostrarBibliotecaBuscar($BuscarTitulo);
    $ArrayEncontrados=$Buscar->Buscar();
    if(!$ArrayEncontrados==null){
    ?>
 <div class="container" id="containerrr">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" id="formularioBusqueda"> <?php include_once ("formulario.html") ?> </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
                <div class="row">
                    <?php
                        for($i=0;$i<count($ArrayEncontrados);$i++){
                            //IMAGEN
                            ?><div class="col-lg-3 col-md-6 col-sm-12" id="p"> <div class="ImagenCaratula"><?php
                            $Buscar->mostrarImagen($ArrayEncontrados[$i]);
                            //TITULO
                            ?><div class="tituloo"><?php echo($Buscar->mostrarTitulo($ArrayEncontrados[$i]));?> </div> <?php
                            //ESTILO
                            if($Buscar->mostrarEstilo($ArrayEncontrados[$i])=="MANGA"){
                                ?><div class="Estilo"><?php echo($Buscar->mostrarEstilo($ArrayEncontrados[$i])); ?></div><?php
                            }else{
                                ?><div class="EstiloManwha"><?php echo($Buscar->mostrarEstilo($ArrayEncontrados[$i])); ?></div><?php
                            }
                            ?><?php
                            //GENERO PRINCIPAL
                            if($Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i])=="SEINEN"){
                                ?>  <div class="GeneroSeinen"> <?php echo $Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i]);?> </div> <?php
                            }else if($Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i])=="SHOUNEN"){
                                ?>  <div class="GeneroShounen"> <?php echo $Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i]);?> </div> <?php
                            }else if($Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i])=="SHOUJO"){
                                ?>  <div class="GeneroShoujo"> <?php  echo $Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i]);?> </div> <?php
                            }else if($Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i])=="JOSEI"){
                                ?>  <div class="generoJosei"> <?php echo $Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i]);?> </div> <?php
                            }else{
                                ?>  <div class="GeneroKodomo"> <?php echo $Buscar->mostrarGeneroPrincipal($ArrayEncontrados[$i]);?> </div> <?php
                            }
                            ?>
                            </div>
                            </div> 
                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>  
    </div>
<?php
}else{
    ?>
    <div class="container" id="containerr">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">   <?php include_once ("formulario.html") ?> </div>
            <div class="col-lg-8 col-md-8 col-sm-8" id="icono">
                    <h1><i class="fas fa-search fa-5x" aria-hidden="true"></i></h1>
                    <h2>No hay elementos</h2>
                </div>
            </div>
        </div>  
    </div>

    <?php
}
include_once ("Menu\Footer/footer.php");
?>
