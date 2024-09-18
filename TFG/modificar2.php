<?php
 include_once ("./Menu\Footer/Menu.php");
 include_once ("gui/modificarMostrar.php");
$titulo=$_GET['titulo'];
$_SESSION['titulo']=$titulo;

if($_SESSION['administrador']==false){
    header("Location: ./index.php");
}else{
    
?>

<div class="row justify-content-md-center" id="contenedorInsertarManga">
    <div class="col-md-8">
        <div class="card2">
            <div class="card-body">
            <h1 class="text-center">MODIFICAR MANGA</h1>
                <form name="modificarManga" id="modificarManga" enctype="multipart/form-data">
                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Titulo</label>
                        <div class="col-lg-6">
                            <input type="text" id="titulo" name="titulo" class="form-control" value="<?php echo(recogerTitulo($titulo)); ?>" required/>
                        </div>
                    </div>

                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Genero1</label>
                        <div class="col-lg-6">
                            <select name="genero1" id="genero1" required>
                                <option value="Accion" selected>Accion</option>
                                <option value="Aventura">Aventura</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Drama">Drama</option>
                                <option value="Ecchi">Ecchi</option>
                                <option value="Fantasia">Fantasia</option>
                                <option value="Magia">Magia</option>
                                <option value="Sobrenatural">Sobrenatural</option>
                                <option value="Horror">Horror</option>
                                <option value="Deporte">Deporte</option>
                                <option value="Mecha">Mecha</option>
                                <option value="Gore">Gore</option>
                                <option value="VidaEscolar">Vida Escolar</option>
                                <option value="Reencarnacion">Reencarnacion</option>
                                <option value="Superpoderes">Superpoderes</option>
                                <option value="Demonios">Demonios</option>
                                <option value="Guerra">Guerra</option>
                                <option value="Musica">Musica</option>
                            </select>
                        </div>
                    </div>

                <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Genero2</label>
                        <div class="col-lg-6">
                            <select name="genero2" id="genero2" required>
                                <option value="Accion">Accion</option>
                                <option value="Aventura" selected>Aventura</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Drama">Drama</option>
                                <option value="Ecchi">Ecchi</option>
                                <option value="Fantasia">Fantasia</option>
                                <option value="Magia">Magia</option>
                                <option value="Sobrenatural">Sobrenatural</option>
                                <option value="Horror">Horror</option>
                                <option value="Deporte">Deporte</option>
                                <option value="Mecha">Mecha</option>
                                <option value="Gore">Gore</option>
                                <option value="VidaEscolar">Vida Escolar</option>
                                <option value="Reencarnacion">Reencarnacion</option>
                                <option value="Superpoderes">Superpoderes</option>
                                <option value="Demonios">Demonios</option>
                                <option value="Guerra">Guerra</option>
                                <option value="Musica">Musica</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Genero3</label>
                        <div class="col-lg-6">
                            <select name="genero3" id="genero3" required>
                                <option value="Accion">Accion</option>
                                <option value="Aventura">Aventura</option>
                                <option value="Comedia" selected>Comedia</option>
                                <option value="Drama">Drama</option>
                                <option value="Ecchi">Ecchi</option>
                                <option value="Fantasia">Fantasia</option>
                                <option value="Magia">Magia</option>
                                <option value="Sobrenatural">Sobrenatural</option>
                                <option value="Horror">Horror</option>
                                <option value="Deporte">Deporte</option>
                                <option value="Mecha">Mecha</option>
                                <option value="Gore">Gore</option>
                                <option value="VidaEscolar">Vida Escolar</option>
                                <option value="Reencarnacion">Reencarnacion</option>
                                <option value="Superpoderes">Superpoderes</option>
                                <option value="Demonios">Demonios</option>
                                <option value="Guerra">Guerra</option>
                                <option value="Musica">Musica</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Descripcion</label>
                        <div class="col-lg-6">
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="8"><?php echo(recogerDescripcion($titulo)); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Estilo</label>
                        <div class="col-lg-6">
                            <select name="estilo" id="estilo" required>     
                                <option value="MANGA">Manga</option>
                                <option value="MANHWA">Manhwa</option>
                            </select>      
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Genero Primario</label>
                        <div class="col-lg-6">
                            <select name="generoPrimario" id="generoPrimario" required>
                                <option value="SEINEN">Seinen</option>
                                <option value="SHOUNEN">Shounen</option>
                                <option value="SHOUJO">Shoujo</option>
                                <option value="JOSEI">Josei</option>
                                <option value="KODOMO">Kodomo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Amateur</label>
                        <div class="col-lg-6">
                            <select name="amateur" id="amateur" required>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Erotico</label>
                        <div class="col-lg-6">
                            <select name="erotico" id="erotico" required>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-xs-12 col-md-8 offset-md-2">
                        <input type="submit" name="enviar" id="enviar" class="btn btn-block btn-lg btn-primary"/>
                    </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
</div>
                <?php
        }
?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="./js/ModificarManga.js"></script>