<?php

    include_once ("Menu\Footer/menu.php");
    require_once "clases/comprobarAdmin.php";
    require_once "clases/mangaShounen.php";
?>
<html>
  <head>
   <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
   <script type="application/x-javascript" src="./js/lib.js"></script>
   <link rel="stylesheet" href="css/css.css">
</head>
<body>



<nav class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
  <a class="nav-item nav-link active" data-toggle="pill" onclick="cargarGui('shounen','central');"role="tab"  aria-selected="false"><i class="fab fa-hotjar fa-fw"></i>P. Shounen</a>
  <a class="nav-item nav-link"  data-toggle="pill" onclick="cargarGui('seinen','central');" role="tab" aria-selected="false"><i class="fas fa-heartbeat fa-fw"></i>P. Seinen</a>
  <a class="nav-item nav-link" data-toggle="pill" onclick="cargarGui('shoujo','central');" role="tab"  aria-selected="false"><i class="fas fa-heart"></i>P. Shoujo</a>
</nav>
  
  <div class="mostrar" id="mostrar"> <?php $shounen=new mostrarShounen(); $shounen->mostShounen(); ?></div>
  <div class="central" id="central"></div>
</body>

<?php

include_once ("Menu\Footer/footer.php");

?>