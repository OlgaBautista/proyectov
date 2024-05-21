<?php
$usuario_id = $_SESSION["id"];
$sql = "SELECT rol FROM productos WHERE id = $usuario_id";
$resultado = $conexion->query($sql);
$datos_usuario = $resultado->fetch_assoc();
$rol_usuario = $datos_usuario["rol"];
?>