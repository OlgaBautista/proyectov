<?php
include "conexion.php"; // Incluye tu archivo de conexión a la base de datos

// Consulta para eliminar todos los productos
$sql = "TRUNCATE TABLE ventas"; // Esta consulta eliminará todos los registros de la tabla 'ventas'
if ($conexion->query($sql) === TRUE) {
    echo "Todos los productos han sido eliminados correctamente";
} else {
    echo "Error al eliminar productos: " . $conexion->error;
}
$conexion->close();
?>
