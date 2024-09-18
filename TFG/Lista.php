<head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>

<?php
    include_once ("Menu\Footer/Menu.php");
    include_once ("clases/MostrarListas.php");

    $Lista = new MostrarListas();
    $Lista->cantidadLista();
    $Cantidad=count($Lista->cantidadLista());
    $Array=$Lista->cantidadLista();
    if($Cantidad!=0){
?>
<div class="row justify-content-md-center"  id="ContainerListas">
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12"><h1 id="TituloLista">LISTA PERSONAL</h1></div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row"> <?php
            for($i=0; $i<=$Cantidad-1; $i++){
                ?><div class="col-lg-3 col-md-4 col-sm-6" id="ListaPersonal">
                    <div id="imagenLista"><?php $Lista->mostrarImagen($Array[$i]); ?></div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>
</div>
</div>
<?php
}else {
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12" id="iconoLista">
        <h1><i class="fas fa-search fa-5x" aria-hidden="true"></i></h1>
        <h2 id="no hay nada en la lista">No hay Mangas en la lista</h2>
    </div>
<?php
}
?>
<?php
include_once ("Menu\Footer/footer.php");

