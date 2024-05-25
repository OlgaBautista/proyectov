<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: http://127.0.0.1/proyectov/");
    exit();
}

include "conexion.php";

if (!empty($_POST["btnregistrar"])) {
    // Verificar que se haya seleccionado un rol
    if (!empty($_POST["rol"])) {
        // Capturar el valor del rol seleccionado
        $id_rol = $_POST["rol"];
        // Resto del código de registro aquí...
    } else {
        echo '<div class="alert alert-danger">Debes seleccionar un rol</div>';
    }
}

// Resto del código PHP...
?>
