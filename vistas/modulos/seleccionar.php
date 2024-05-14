<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: http://127.0.0.1/proyectov/");
    exit(); // Agregamos exit para detener la ejecución del script
}

include "conexion.php";

// Obtener el rol del usuario
$usuario_id = $_SESSION["id"];
$sql = "SELECT rol FROM productos WHERE id = $usuario_id";
$resultado = $conexion->query($sql);
$datos_usuario = $resultado->fetch_assoc();
$rol_usuario = $datos_usuario["rol"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina de Inicio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet"
    href="http://127.0.0.1/proyectov/vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet"
    href="http://127.0.0.1/proyectov/vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" type="text/css" href="seleccionar.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="http://127.0.0.1/proyectov/vistas/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
        height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="http://127.0.0.1/proyectov/vistas/imagen/tienda.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">¡Bienvenido!</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="http://127.0.0.1/proyectov/vistas/imagen/icon1.png" class="img-circle elevation-2"
              alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellido"]; ?></a>
          </div>
        </div>


        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
            <li class="nav-header">Menú</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Sobre Nosotros
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Redes Sociales
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="cierre.php" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Cerrar Sesion
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Menú</h1>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" id="inv-color">
                <div class="inner">
                  <h3>Inventario</h3>
                  <p>Busqueda, modificación y eliminar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="http://127.0.0.1/proyectov/vistas/modulos/alta-producto.php" class="small-box-footer">Pulsa
                  aqui <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <?php if ($rol_usuario === '6' || $rol_usuario === '7') { ?>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" id="p-color">
                <div class="inner">
                  <h3>Altas</h3>

                  <p>Agregar producto</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="http://127.0.0.1/proyectov/vistas/modulos/registro-producto.php" class="small-box-footer">Pulse
                  aqui <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php } ?>
            
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" id="c-color">
                <div class="inner">
                  <h3>Ventas</h3>

                  <p>Reporte Venta</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="http://127.0.0.1/proyectov/vistas/modulos/reporteventa.php" class="small-box-footer">More info
                  <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <?php if ($rol_usuario === '6' || $rol_usuario === '7') { ?>

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" id="d-color">
                <div class="inner">
                  <h3>Prestamo</h3>
                  <p>Administre sus prestamos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <?php } ?>

            <style>
              div#r-color {
                background-color: #216974;
              }
            </style>

              <?php if ($rol_usuario === '6') { ?>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" id="r-color">
                <div class="inner">
                  <h3>Registro</h3>

                  <p>Dar de alta usuarios </p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
               <?php } ?>

          </div>
      </section>
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> Lupita & Laura Todos los
      derechos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>

  <!-- jQuery -->
  <script src="http://127.0.0.1/proyectov/vistas/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="http://127.0.0.1/proyectov/vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/chart.js/Chart.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/sparklines/sparkline.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/moment/moment.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/daterangepicker/daterangepicker.js"></script>
  <script
    src="http://127.0.0.1/proyectov/vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/dist/js/adminlte.js"></script>
</body>

</html>