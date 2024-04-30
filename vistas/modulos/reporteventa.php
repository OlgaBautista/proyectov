<?php
session_start();

if (empty($_SESSION["id"])) {
  header("location: http://127.0.0.1/proyectov/");
}

?>
<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "inventariov";


$conexion = mysqli_connect($servidor, $usuario, "") or die("Error con el servidor de la Base de datos");


$db = mysqli_select_db($conexion, $basededatos) or die("Error conexion al conectarse a la Base de datos");


$conexion->set_charset("utf8");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet"
    href="http://127.0.0.1/proyectov/vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="http://127.0.0.1/proyectov/vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet"
    href="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/dist/css/adminlte.min.css">
  <script src="https://kit.fontawesome.com/4a8faa5bb3.js" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini">

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
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
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
        <img src="http://127.0.0.1/proyectov/vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">¡Bienvenido!</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="http://127.0.0.1/proyectov/vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
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
            <!-- Columna para el formulario -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario</h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="frmVentasProductos" method="POST">
                  <div class="card-body">
                    <!-- Tu formulario aquí -->
                    <div class="form-group">
                      <label>Selecciona Producto</label>
                      <select class="form-control input-group-sm" id="productoVenta" name="productoVenta">
                        <option value="">Selecciona</option>
                        <?php
                        // Consulta para obtener la lista de productos
                        $sql = $conexion->query("SELECT * FROM altas");
                        while ($producto = $sql->fetch_object()) {
                          echo "<option value='" . $producto->id . "'>" . $producto->nombre . "</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Codigo</label>
                      <input type="text" class="form-control" id="codigoV" placeholder="Ingresa precio" name="codigoV">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Precio</label>
                      <input type="text" class="form-control" id="precioV" placeholder="Ingresa cantidad"
                        name="precioV">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad</label>
                      <input type="text" class="form-control" id="cantidadV" placeholder="Ingresa codigo"
                        name="cantidadV">
                    </div>
                    <div class="card-footer">
                      <button id="btnEnviar" type="button" class="btn btn-primary">Enviar</button>
                    </div>

                  </div>
                </form>
              </div>
            </div>
            <!-- /.card-body -->

            <!-- Columna para la tabla -->
            <div class="col-md-6">
              <div id="tablaDatos" class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabla de Productos</h3>
                </div>
                <div class="card-body">
                  <!-- Tu tabla aquí -->
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-black">
                        <th>Nombre</th>
                        <th>Código</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                      </tr>
                    </thead>
                </div>

                <div>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                  <script>

                    $(document).ready(function () {
                      // Autollenado de campos al cargar la página
                      $('#productoVenta').change(function () {
                        // Obtener el ID del producto seleccionado
                        var idProducto = $(this).val();
                        // Realizar una solicitud AJAX para obtener los detalles del producto
                        $.ajax({
                          url: 'obtener_producto.php', // Ruta de tu archivo PHP que obtiene los datos del producto
                          method: 'POST',
                          data: { idProducto: idProducto },
                          dataType: 'json',
                          success: function (data) {
                            // Actualizar los campos con los datos obtenidos
                            $('#codigoV').val(data.codigo);
                            $('#precioV').val(data.precio);
                            $('#cantidadV').val(data.cantidad);
                          },
                          error: function (xhr, status, error) {
                            console.error(xhr.responseText);
                          }
                        });
                      });

                      // Envío de datos al hacer clic en el botón "Enviar"
                      $('#btnEnviar').click(function () {
                        // Obtener el ID del producto seleccionado
                        var idProducto = $('#productoVenta').val();
                        // Realizar una solicitud AJAX para obtener los datos del producto
                        $.ajax({
                          url: 'obtener_producto.php', // Ruta de tu archivo PHP que obtiene los datos del producto
                          type: 'POST',
                          data: { idProducto: idProducto },
                          dataType: 'json',
                          success: function (data) {
                            // Construir la fila con los datos recibidos
                            var fila = '<tr>';
                            fila += '<td>' + data.nombre + '</td>';
                            fila += '<td>' + data.codigo + '</td>';
                            fila += '<td>' + data.precio + '</td>';
                            fila += '<td>' + data.cantidad + '</td>';
                            fila += '</tr>';
                            // Agregar la fila a la tabla
                            $('#tablaDatos table').append(fila);
                          },
                          error: function () {
                            alert('Error al obtener los datos del producto.');
                          }
                        });
                      });
                    });

                  </script>

                  <script src="http://127.0.0.1/proyectov/vistas/plugins/jquery/jquery.min.js"></script>
                  <script src="http://127.0.0.1/proyectov/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                  <script src="http://127.0.0.1/proyectov/vistas/plugins/datatables/jquery.dataTables.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                  <script src="http://127.0.0.1/proyectov/vistas/plugins/jszip/jszip.min.js"></script>
                  <script src="http://127.0.0.1/proyectov/vistas/plugins/pdfmake/pdfmake.min.js"></script>
                  <script src="http://127.0.0.1/proyectov/vistas/plugins/pdfmake/vfs_fonts.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                  <script
                    src="http://127.0.0.1/proyectov/vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                  <script src="http://127.0.0.1/proyectov/vistas/dist/js/adminlte.min.js"></script>

                  <script>

                  </script>
                </div>
              </div>
            </div>

          </div>
          </form>
        </div>
        <!-- /.card -->

    </div>

  </div>
  </div>
  </div>
  </div><!-- /.container-fluid -->
  </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>
</body>

</html>