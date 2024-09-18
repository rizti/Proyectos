<?php
    include_once ("Menu\Footer/Menu.php");
?>
<head>
    <link rel="stylesheet" href="css/css.css">
    <style>

    </style>
</head>


<div class="row justify-content-md-center" id="contenedorInicioSesion">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            <h1 class="text-center">Login</h1>
                <form class="form-horizontal" name="iniciarSesion" id="iniciarSesion">

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Correo</label>
                        <div class="col-lg-6">
                            <input id="usuario" type="text" class="form-control" name="usuario">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Contraseña</label>
                        <div class="col-lg-6">
                            <input id="clave" type="password" class="form-control" name="clave">
                    </div>

                    
                    </div>
                    <div class="form-group row">
                    <div class="col-xs-12 col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-block btn-lg btn-primary" name="entrar" id="entrar">
                    <i class="fas fa-sign-in-alt fa-fw"></i>Acceder
                    </button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        <script src="./js/comprobarLogin.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
include_once ("Menu\Footer/footer.php");