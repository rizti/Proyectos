<?php
require_once "BBDD.php";

    class funcionesBasicas{

        //COMPROBAR SI EL USUARIO ES UN ADMINISTRADOR DE LA PAGINA
        public static function comprobarAdministrador(){
            $usu=$_SESSION['usuario'];

            $bd = new Bbdd("localhost", "root", "", "tfg");
            $result = $bd->consultarBD("SELECT Tipo FROM usuarios WHERE Nombre_Us = '$usu'");
            if ($result->num_rows == 1) {
                while($row=mysqli_fetch_assoc($result)){
                   if($row['Tipo']=="B"){
                    $_SESSION['administrador']=true;
                       return true;
                   }else{
                       return false;
                       $_SESSION['administrador']=false;
                   }
            $bd->cerrarBD();
        }
    }
}
}
?>