<?php

include "conexion.php";

$id = $_GET["id"];

$sql = $conexion->query("select * from altas where id=$id ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
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
        <li class="nav-item d-none d-sm-inline-block">
          <a href="http://127.0.0.1/proyectov/vistas/modulos/alta-producto.php" class="nav-link">Regresar</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
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
            <a href="#" class="d-block">Tienda "La Curvita"</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Sobre Nosotros
                  <span class="badge badge-info right"></span>
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
      <!-- Main content -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Modificar producto</h1>
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
                <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                <?php


                while ($datos = $sql->fetch_object()) {

                  ?>



                  <form method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Categoria</label>
                        <input type="text" class="form-control" placeholder="Ingresa categoria" name="categoria"
                          value="<?= $datos->categoria ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Ingresa nombre de producto" name="nombre"
                          value="<?= $datos->nombre ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Precio</label>
                        <input type="text" class="form-control" placeholder="Ingresa precio" name="precio"
                          value="<?= $datos->precio ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Stock</label>
                        <input type="text" class="form-control" placeholder="Ingresa cantidad" name="stock"
                          value="<?= $datos->stock ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Codigo</label>
                        <input type="text" class="form-control" placeholder="Ingresa codigo" name="codigo"
                          value="<?= $datos->codigo ?>">
                      </div>
                    <?php }

                ?>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
                    </div>


                  </div>
              </div>
            </div>
            <!-- /.card-body -->


          </div>
          </form>

          <?php
          if (!empty($_POST["btnmodificar"])) {

            if (!empty($_POST["categoria"]) and !empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["stock"]) and !empty($_POST["codigo"])) {
              $id = isset($_GET["id"]) ? $_GET["id"] : null;
              $categoria = $_POST["categoria"];
              $nombre = $_POST["nombre"];
              $precio = $_POST["precio"];
              $stock = $_POST["stock"];
              $codigo = $_POST["codigo"];
              $sql = $conexion->query("update altas set categoria='$categoria', nombre='$nombre', precio='$precio', stock='$stock', codigo='$codigo' where id='$id'");
              if ($sql) {
                echo "<div class='alert alert-success'>Actualizado con exito</div>";
              } else {
                // Mostrar mensaje de error si la modificación falló
                echo "<div class='alert alert-danger'>Error al actualizar el producto</div>";
              }
  
            }

          }

          ?>  

        </div>
        <!-- /.card -->

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
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="http://127.0.0.1/proyectov/vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script
    src="http://127.http://127.0.0.1/proyectov/vistas/proyectov/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script
    src="http://127.0.0.1/proyhttp://127.0.0.1/proyectov/vistas/vistas/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="http://127.0.0.1/proyectov/vistas/dist/js/admhttp://127.0.0.1/proyectov/vistas/min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>

</body>

</html>