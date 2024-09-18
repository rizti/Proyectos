<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>

<?php
    if(isset($_GET['titulo'])){
        $titulo=$_GET['titulo'];
        $_SESSION['titulo']=$titulo;

    require_once "clases/BBDD.php";
    include_once "Menu\Footer/Menu.php";
    require_once "clases/MostrarMangaEspecifico.php";
?>

<?php
    $mangaEspe=new mostrarMangaEspe($titulo);
?>

<div class="fondoTodaDescri">
<div class="fondoColor">
<div id="tituloMangaInfo"><h1><?php echo ($mangaEspe->MostrarTitulo()); ?><h1></div>
<div class="container" id="mangaInfo">
    <div class="row">
        <div class="col-lg-3 col-md-5 col-sm-12">
            <div id="imagenMangaPortadaInfo">
                <?php echo( $mangaEspe->MostrarImagen()); ?>
                <?php
                        if($mangaEspe->MostrarGeneroPri()=="SHOUNEN"){
                           ?> <div id="GeneroShounen" class="genero_pri"> <?php echo ($mangaEspe->MostrarGeneroPri()); ?> </div> <?php
                        }else if($mangaEspe->MostrarGeneroPri()=="SEINEN"){
                            ?> <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="GeneroSeinen" class="genero_pri"> <?php echo ($mangaEspe->MostrarGeneroPri()); ?> </div> <?php
                        }else if($mangaEspe->MostrarGeneroPri()=="SHOUJO"){
                            ?> <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="GeneroShoujo" class="genero_pri"> <?php echo ($mangaEspe->MostrarGeneroPri()); ?> </div> <?php
                        }else if($mangaEspe->MostrarGeneroPri()=="JOSEI"){
                            ?> <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="GeneroJosei" class="genero_pri"> <?php echo ($mangaEspe->MostrarGeneroPri()); ?> </div> <?php
                        }else {
                            ?> <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="GeneroKodomo" class="genero_pri"> <?php echo ($mangaEspe->MostrarGeneroPri()); ?> </div> <?php
                        }
                        if($mangaEspe->MostrarEstilo()=="MANGA"){
                           ?> <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="EstiloManga"> <?php echo ($mangaEspe->MostrarEstilo()); ?> </div>
                    <?php
                        }else{
                           ?> <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="EstiloManwha"> <?php echo ($mangaEspe->MostrarEstilo()); ?> </div>
                    <?php
                        }
                    ?>
            </div>
        </div>
        <div class="col-lg-9 col-md-7 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"><div id="descripcion"> <?php echo ($mangaEspe->MostrarDescripcion()); ?></div> </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center" id="generoBasico" ><a id="enlaceGenero" href="biblioteca.php?genero=<?php echo $mangaEspe->MostrarGenero1(); ?>"> <strong> <?php echo ($mangaEspe->MostrarGenero1()); ?> </strong> </a> </div> 
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center" id="generoBasico" ><a id="enlaceGenero" href="biblioteca.php?genero=<?php echo $mangaEspe->MostrarGenero2(); ?>"> <strong> <?php echo ($mangaEspe->MostrarGenero2()); ?> </strong> </a> </div> 
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center" id="generoBasico" ><a id="enlaceGenero" href="biblioteca.php?genero=<?php echo $mangaEspe->MostrarGenero3(); ?>"> <strong> <?php echo ($mangaEspe->MostrarGenero3()); ?> </strong> </a> </div> 
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="Amateur">AMATEUR:<?php echo ($mangaEspe->Amateur()); ?></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center" id="Erotico">EROTICO:  <?php echo ($mangaEspe->Erotico()); ?> </div>
                    <?php if(isset($_SESSION['usuario'])){ ?>
                    <form name="añadir" id="añadir" class="col-lg-6 col-md-6 col-sm-6 text-center">
                        <div class="col-lg-12 col-md-12 col-sm-6 text-center" id="botonAñadir"><button id="añadirLista"><i class="fas fa-heart" id="corazon"></i></button></div>
                    </form>
                    <form name="eliminar" id="eliminar" class="col-lg-6 col-md-6 col-sm-6 text-center">
                        <div class="col-lg-12 col-md-12 col-sm-6 text-center" id="botonEliminar"><button id="eliminarLista"><i class="fas fa-heartbeat" id="corazonRoto"></i></button></div>
                    </form>
                    <?php } ?> 
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
$_SESSION['tituloManga']=$mangaEspe->MostrarTitulo();
include_once ("Menu\Footer/footer.php");
}
?>
    <script src="./js/AñadirLista.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <?php
    