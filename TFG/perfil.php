<head>
    <link rel="stylesheet" href="css/css.css">
</head>
<?php
    include_once ("Menu\Footer/Menu.php");
    include_once ("clases/BuscarDatosUsuario.php");
    $idUs=$_SESSION['idUs'];
    $Datos=new RecogerDatos();
?>
<div class="row justify-content-md-center" id="modificarPerfil">
    <div class="col-md-8">
        <div class="card2">
            <div class="card-body">
            <h1 class="text-center" id="tituloPerfil">MODIFICAR PERFIL</h1>
                <form name="formularioPerfil" id="formularioPerfil" enctype="multipart/form-data">
                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Nombre: </label>
                        <div class="col-lg-6">
                            <input type="text" id="nombre" name="nombre" value="<?php echo ($Datos->recogerNombre($idUs)); ?>" disabled >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Apellidos: </label>
                        <div class="col-lg-6">
                            <input type="text" id="apellido" name="apellido" value="<?php echo ($Datos->recogerApellido($idUs)); ?>" disabled >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Nombre Usuario: </label>
                        <div class="col-lg-6">
                            <input type="text" id="nombreUsuario" name="nombreUsuario"   value="<?php echo ($Datos->recogerNombre_Us($idUs)); ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Nueva Contraseña: </label>
                        <div class="col-lg-6">
                            <input type="password" id="clave" name="clave">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Repetir Contraseña: </label>
                        <div class="col-lg-6">
                            <input type="password" id="clave2" name="clave2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Correo: </label>
                        <div class="col-lg-6">
                                <input type="text" id="correo" value="<?php echo ($Datos->recogerCorreo($idUs)); ?>" disabled >
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-xs-12 col-md-8 offset-md-2">
                        <button type="submit" name="enviarCambios" id="enviarCambios" class="btn btn-block btn-lg btn-primary"><i class="fas fa-save"></i> Guardar Cambios</button>
                    <!--<input type="submit" name="enviarCambios" id="enviarCambios" value="Guardar Cambios"  class="btn btn-block btn-lg btn-primary"></input>-->
                    </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once ("Menu\Footer/footer.php");
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="./js/ComprobarFormularioEditado.js"></script>