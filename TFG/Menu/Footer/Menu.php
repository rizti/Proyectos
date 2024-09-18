<?php
    session_start();
    require_once "clases/comprobarAdmin.php";
?>
<head>
<link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="css/css.css">
</head>

      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand animated fadeIn" href="index.php"> <div id="imagenLogotipo"></div> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault">
              <span class="navbar-toggler-icon"></span>
            </button>

             <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="biblioteca.php">  <i class="fas fa-book"></i>Biblioteca </a>
                </li>
                <?php
                    if(isset($_SESSION['usuario'])){
                      funcionesBasicas::comprobarAdministrador();

                    if(funcionesBasicas::comprobarAdministrador()==true){?>
                      <li>
                        <a  class="nav-link" href="insertarManga.php">Insertar Manga</a>
                      </li>
                      <li>
                        <a   class="nav-link" href="Modificar.php">Modificar Manga</a>
                      </li>
                    <?php } } ?>
              </ul>
              <form  name="formulario1" id="formulario1" action="Biblioteca-Buscador.php" accept-charset="UTF-8" class="form-inline my-2 my-md-0 px-0 px-md-3">

                <input name="title" id="palabra"  type="text" class="form-control" placeholder="Buscar..."/>
              </form>
              <ul class="navbar-nav">
                    <?php
                      if(!isset($_SESSION['usuario'])){
                    ?>
                <li class="nav-item"><a href="inicioSesion.php" class="nav-link">Iniciar Sesion</a></li>
                <li class="nav-item"><a href="registrarse.php" class="nav-link">Registrarse</a></li>
                    <?php }else{ ?>
                      <div class="btn-group" >
                      <button type="button" class="dropdown-toggle rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="botonPerfil">
                      <img class="rounded-circle" style="height:30px; width:30px; display:inline" src="img/noAvatar.jpg"/> 
                      <?php
                          echo ($_SESSION['usuario']);
                      ?>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="Lista.php"> <i class="fas fa-clipboard-list"></i>Listas</a>
                        <a class="dropdown-item" href="perfil.php"> <i class="fas fa-id-card"></i>Perfil</a>
                        <a class="dropdown-item" href="./gui/cerrarSesion.php">Desconectar</a>
                    </div>
                  <?php  } ?>
             </ul>
            </div>
        </div>
      </div>
</nav>


<script src="bootstrap-4.6.0-dist/js/jquery-3.5.1.min.js"></script>
<script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>