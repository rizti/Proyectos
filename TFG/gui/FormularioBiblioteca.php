<?php
    include_once ("clases/LibreriaFormulario.php");
    
    $generoPri=$_POST['generoPri'];
    $genero=$_POST['Genero'];
    $Erotico=$_POST['Erotico'];
    $Amateur=$_POST['Amateur'];

    $Biblioteca = new MostrarBibliotecaBuscar($generoPri,$genero,$Erotico,$Amateur);

?>