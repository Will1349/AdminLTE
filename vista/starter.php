<?php
session_start();
$peticionAjax = false;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo SERVERURL ?>/vista/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SERVERURL ?>/vista/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
require_once "./controlador/vista.controlador.php";
$vt     = new VistaControlador();
$vistas = $vt->CtrMostrarVistas();
if ($vistas == "login" || $vistas == "404"):
    if ($vistas == "login") {
        require_once "./vista/contenido/login-view.php";
    } else {
        require_once "./vista/contenido/404-view.php";
    } else :
    require 'modulos/navBar.php';?>
                            <!-- /.navbar -->

                            <!-- Main Sidebar Container -->
                            <?php require 'modulos/sideCabecera.php';?>

                            <!-- contenido de la pagina -->

                             <?php require 'modulos/sideBar.php'?>
                             <?php
    require_once $vistas;
    ?>

                            <!-- Main Footer -->
                            <?php require 'modulos/footer.php';?>
                          </div>
                          <!-- ./wrapper -->
                          <?php endif;?>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo SERVERURL ?>/vista/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo SERVERURL ?>/vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SERVERURL ?>/vista/dist/js/adminlte.min.js"></script>
</body>
</html>
