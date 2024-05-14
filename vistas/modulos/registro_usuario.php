<?php
session_start();

if (empty($_SESSION["id"])) {
  header("location: http://127.0.0.1/proyectov/");
}

?>
<?php

include "conexion.php";

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
  <!-- JQVMap -->
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
        <li class="nav-item d-none d-sm-inline-block">
          <a href="http://127.0.0.1/proyectov/vistas/modulos/seleccionar.php" class="nav-link">Home</a>
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
            <li class="nav-header">EXAMPLES</li>
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Alta de Producto</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario</h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Usuario</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresa usuario"
                        name="usuario">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Clave</label>
                      <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Ingresa clave" name="clave">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nombre</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresa nombre"
                        name="nombre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Apellido</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresa apellido"
                        name="apellido">
                    </div>
                    <div class="form-group">
                      <label>Selecciona Rol</label>
                      <select class="form-control input-group-sm" id="rol" name="rol">
                        <option value="6">Administrador</option>
                        <option value="7">Usuario</option>
                        <option value="8">Consultor</option>
                      </select>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
                    </div>
                    <?php
                    if (!empty($_POST["btnregistrar"])) {

                      if (!empty($_POST["usuario"]) and !empty($_POST["clave"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["rol"])) {

                        $usuario = $_POST["usuario"];
                        $clave = $_POST["clave"];
                        $nombre = $_POST["nombre"];
                        $apellido = $_POST["apellido"];
                        $rol = $_POST["rol"];

                        $sql = $conexion->query("insert into productos(usuario,clave,nombre,apellido,rol)values('$usuario','$clave','$nombre','$apellido','$rol' ) ");
                        if ($sql) {
                          echo '<div class="alert alert-success">Producto registrado correctamente</div>';
                          # code...
                        } else {
                          echo '<div class="alert alert-danger">Error de registro</div>';
                        }


                      } else {
                        echo '<div class="alert alert-danger"> Alguno de los campos sigue vacio  </div>';
                      }
                    }

                    ?>
                  </div>
              </div>
            </div>

          </div>
          </form>
        </div>
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manten el control de tus productos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="bg-black">
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rol</th>
                    <th></th>
                
            
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = $conexion->query(" select * from productos ");
                    while ($datos = $sql->fetch_object()) { ?>

                   <tr>
                    <td><?= $datos->id?></td>
                    <td><?= $datos->usuario?></td>
                    <td><?= $datos->clave?></td>
                    <td><?= $datos->nombre?></td>
                    <td><?= $datos->apellido?></td>
                    <td><?= $datos->rol?></td>
                   
                      <td>
                        <a href="http://127.0.0.1/proyectov/vistas/modulos/modificar.php?id=<?= $datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="http://127.0.0.1/proyectov/vistas/modulos/alta-producto.php?id=<?= $datos->id?>" class="btn btn-small btn-danger"><i class="fa-regular fa-rectangle-xmark"></i></a>
                      </td>
               
                  </tr>
                  
                  <?php }

                  ?>
                  
                  
                  </tbody>
           
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!--/.col (right) -->
  </div>
  <!-- /.row -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> Lupita & Laura Todos los
    derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>

  <script src="http://127.0.0.1/proyectov/vistas/plugins/jquery/jquery.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script
    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script
    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/jszip/jszip.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="http://127.0.0.1/proyectov/vistas/dist/js/adminlte.min.js"></script>

  <script>

  </script>
</body>

</html>