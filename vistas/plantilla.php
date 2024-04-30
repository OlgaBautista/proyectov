<?php

      $usuario = "root"; 
    	$password = "";   
   		$servidor = "localhost"; 
   		$basededatos ="inventariov"; 

		
		$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 

		
		$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        $conexion-> set_charset("utf8");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1/proyectov/vistas/dist/css/adminlte.min.css">
</head>

<style>
  
body {

  background-image: url('vistas/imagen/azul.jpg');

}

.login-box{

  color: white;

}

.login-card-body {
  
  background-color: rgba(255, 255, 255, 0.5);
  padding: 20px 30px; 
  color: white;
}

</style>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <p><b>Tienda</b>"La Curvita"</p>
  </div>
  <!-- /.login-logo -->
 
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia para ingresar a tu sesión</p>

  
      <form method="post" action="">
        <?php
        session_start();
                  if (!empty($_POST["btningresar"])){
                    if (empty($_POST["usuario-Ing"]) and empty ($_POST["clave-Ing"])) {
                      echo '<div class="alert alert-danger">Los campos estan vacios</div>';
                    } else {
                        $usuario=$_POST["usuario-Ing"];
                        $clave=$_POST["clave-Ing"];
                        $sql=$conexion->query(" select * from productos where usuario='$usuario' and clave='$clave' ");
                        if ($datos=$sql->fetch_object()) { 
                            $_SESSION["id"]=$datos->id;
                            $_SESSION["nombre"]=$datos->nombre;
                            $_SESSION["apellido"]=$datos->apellido;
                            header("location:http://127.0.0.1/proyectov/vistas/modulos/seleccionar.php"); 
                        } else {
                            echo '<div class="alert alert-danger">Datos incorrectos</div>';
                        }
        
                    }
                  }
        ?>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email" name="usuario-Ing">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="clave-Ing">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <input name=btningresar type="submit" class="btn btn-primary btn-block" value="Entrar">  
          </div>

          
          <!-- /.col -->
        </div>

    
      </form>

    </div>
    <!-- /.login-card-body -->
  
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="http://127.0.0.1/proyectov/vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1/proyectov/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://127.0.0.1/proyectov/vistas/dist/js/adminlte.min.js"></script>
</body>
</html>
