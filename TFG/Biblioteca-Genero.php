<?php

require_once ("clases/LibreriaGenero.php");
?>
<script src="./js/AvanzarRetrocederGenero.js"></script>

<?php


$pag=abs($_REQUEST['txtPag']??0);
$Manga=getNextPaginaGenero($pag);
if (!count($Manga)) $Manga=getNextPaginaGenero(--$pag);
    $Biblioteca= new MostrarBibliotecaGenero($_GET['genero']);
    
?>
    <div class="container" id="containerr">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">  <?php include_once ("formulario.html") ?> </div>
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
                        $url=($_SERVER['REQUEST_URI']);
                        ?>
                        
                            <form name="AvanzarRetrocederGenero" action="<?php echo $url?>" method="post">
                                <input type="hidden" value="<?php echo $pag;?>" name="txtPag" id="txtPag"><br>
                                    <?php
                                        $contar=contar($Manga);
                                    ?>
                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                         <div class="row">
                                             <div class="col-lg-6 col-md-6 col-sm-6">
                                                <button onclick="onClick_PaginarMenos()" class="button red"><i class="fas fa-backward"></i>  Anterior</button>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <button onclick="onClick_PaginarMas()" class="button green"> Siguiente <i class="fas fa-forward"></i></button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                </div>
            </div>
        </div>  
    </div>