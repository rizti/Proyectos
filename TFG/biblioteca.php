<?php

include_once ("Menu\Footer/menu.php");
require_once ("clases/Libreria.php");

require_once ("gui/funcionGetNextPagina.php");
?>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>


<?php

if(isset($_GET['genero'])){
    include_once ("Biblioteca-Genero.php");
}else{

    
?>
 <script src="./js/AvanzarRetroceder.js"></script>
<?php
$pag=abs($_REQUEST['txtPag']??0);
$Manga=getNextPagina($pag);

if (!count($Manga)) $Manga=getNextPagina(--$pag);
    $Biblioteca= new MostrarBiblioteca();
    
?>

    <div class="container" id="containerr">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4" id="formularioBusqueda"> <?php include_once ("formulario.html") ?> </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
                <div class="row">
                    <?php
                        for($i=0;$i<count($Manga);$i++){
                            //IMAGEN
                            ?><div class="col-lg-3 col-md-6 col-sm-12" id="p"> <div class="ImagenCaratula"><?php
                            $Biblioteca->mostrarImagen($Manga[$i]);
                            //TITULO
                            ?><div class="tituloo"><?php echo($Biblioteca->mostrarTitulo($Manga[$i]));?> </div> <?php
                            //ESTILO
                            if($Biblioteca->mostrarEstilo($Manga[$i])=="MANGA"){
                                ?><div class="Estilo"><?php echo($Biblioteca->mostrarEstilo($Manga[$i])); ?></div><?php
                            }else{
                                ?><div class="EstiloManwha"><?php echo($Biblioteca->mostrarEstilo($Manga[$i])); ?></div><?php
                            }
                            ?><?php
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
                            <form name="AvanzarRetroceder" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <input type="hidden" value="<?php echo $pag;?>" name="txtPag" id="txtPag"><br>
                                    <?php
                                        $contar=contar($Manga);
                                    ?>
                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                         <div class="row">
                                             <div class="col-lg-6 col-md-6 col-sm-6" >
                                                <button onclick="onClick_PaginarMenos()" class="button red"><i class="fas fa-backward"></i>  Anterior</button>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6" id="botonAvanzar">
                                                <button onclick="onClick_PaginarMas()" class="button green"> Siguiente <i class="fas fa-forward"></i></button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                </div>
            </div>
        </div>  
    </div>

<?php
}

include_once ("Menu\Footer/footer.php");