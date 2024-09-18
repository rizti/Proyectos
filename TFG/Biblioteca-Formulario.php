<?php
    require_once ("Menu\Footer/Menu.php");
    include_once ("gui/FormularioBiblioteca.php");
    require_once ("gui/funcionGetNextPagina.php");
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>

<?php


$pag=abs($_REQUEST['txtPag']??0);

$Manga=getNextPaginaFormulario($pag);
?>
    <div class="container" id="containerr">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"> <?php include_once ("formulario.html")?> </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="row">
                    <?php
                        for($i=0;$i<count($Manga);$i++){
                            //IMAGEN
                            ?><div class="col-lg-4 col-md-6 col-sm-12" id="p">  <div class="ImagenCaratula"><?php
                            $Biblioteca->mostrarImagen($Manga[$i]); 
                            //TITULO
                            ?><div class="tituloo"><?php echo($Biblioteca->mostrarTitulo($Manga[$i]));?> </div> <?php
                            //ESTILO
                            if($Biblioteca->mostrarEstilo($Manga[$i])=="MANGA"){
                                ?><div class="Estilo"><?php echo($Biblioteca->mostrarEstilo($Manga[$i])); ?></div><?php
                            }else{
                                ?><div class="EstiloManwha"><?php echo($Biblioteca->mostrarEstilo($Manga[$i])); ?></div><?php
                            }
                            //GENERO PRINCIPAL
                            if($Biblioteca->mostrarGeneroPrincipal($Manga[$i])=="SEINEN"){
                                ?>  <div class="GeneroSeinen"> <?php echo $Biblioteca->mostrarGeneroPrincipal($Manga[$i]);?> </div> <?php
                            }else if($Biblioteca->mostrarGeneroPrincipal($Manga[$i])=="SHOUNEN"){
                                ?>  <div class="GeneroShounen"> <?php echo $Biblioteca->mostrarGeneroPrincipal($Manga[$i]);?> </div> <?php
                            }else if($Biblioteca->mostrarGeneroPrincipal($Manga[$i])=="SHOUJO"){
                                ?>  <div class="GeneroShoujo"> <?php  echo $Biblioteca->mostrarGeneroPrincipal($Manga[$i]);?> </div> <?php
                            }else if($Biblioteca->mostrarGeneroPrincipal($Manga[$i])=="JOSEI"){
                                ?>  <div class="generoJosei"> <?php echo $Biblioteca->mostrarGeneroPrincipal($Manga[$i]);?> </div> <?php
                            }else{
                                ?>  <div class="GeneroKodomo"> <?php echo $Biblioteca->mostrarGeneroPrincipal($Manga[$i]);?> </div> <?php
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
    include_once ("Menu\Footer/footer.php");