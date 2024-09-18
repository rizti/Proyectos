<?php
    include_once ("Menu\Footer/Menu.php");
?>  
<head>
    <link rel="stylesheet" href="css/css.css">
</head>


        <div class="row justify-content-md-center" id="contenedorRegistrarse">
    <div class="col-md-8">
        <div class="card2">
            <div class="card-body">
            <h1 class="text-center">REGISTRO</h1>
                <form class="form-horizontal justify.content-md-center" name="registrarUsuarios" id="registrarUsuarios">

                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">NOMBRE: </label>
                        <div class="col-lg-6">
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                    </div>

                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">APELLIDO: </label>
                        <div class="col-lg-6">
                        <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                        </div>
                    </div>

                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">NOMBRE USUARIO: </label>
                        <div class="col-lg-6">
                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">CONTRASEÑA: </label>
                        <div class="col-lg-6">
                            <input type="password" name="clave" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">REPETIR CONTRASEÑA: </label>
                        <div class="col-lg-6">
                            <input type="password" name="clave2" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">EMAIL: </label>
                        <div class="col-lg-6">
                            <input type="mail" id="correo" name="correo" class="form-control" required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right"></label>
                        <div class="col-lg-6">
                            <a href="terminosLegales/politica-y-privacidad.html" target="_blank"> Política de privacidad</a> <input type="checkbox" name="politicaPrivacidad" id="politicaPrivacidad" required/>
                    </div>
                    
                    


                    </div>
                    <div class="form-group row">
                    <div class="col-xs-12 col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-block btn-lg btn-primary" name="registrarse" id="registrarse" value="registrarse">
                    <i class="fas fa-sign-in-alt fa-fw"></i>Registrarse
                    </button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./js/comprobarFormulario.js"></script>
    
    <?php
    include_once ("Menu\Footer/footer.php");