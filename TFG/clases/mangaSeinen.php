<head>
<link rel="stylesheet" href="css/css.css">
</head>
<?php

require_once "BBDD.php";
    class mostrarSeinen{

 public function mostSeinen(){
    ?>

        <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">        
                    <div class="row">
    <?php
        $bd = new Bbdd("localhost", "root", "", "tfg");
        $result = $bd->consultarBD("SELECT titulo,Imagen,Estilo,genero_Primario FROM mangainfo WHERE genero_Primario='SEINEN'");
        for($i=0;$i<=11;$i++){
            $manga = $result->fetch_assoc();
                ?>
                <div class="col-lg-3 col-md-4 col-sm-2" id="p">
                <a href="manga.php?titulo=<?php echo $manga['titulo']; ?>"><div class="imagenCaratula"> <img width="230px" height="350px" src="data:image/jpeg;base64,<?php echo($manga['Imagen'])?>"></a>
                    <div class="tituloSeinen" id="indexTituloSeinen"> <?php echo $manga['titulo']; ?> </div>
                </div>
                </div>
            <?php
        }
        $bd->cerrarBD();
        ?>
                </div>
            </div>
        </div>
        <?php
        }
}
?>