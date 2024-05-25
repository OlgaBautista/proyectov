<?php
// Verificar si se recibió un ID de producto válido
if (isset($_GET['id'])) {
    // Obtener el ID del producto desde la solicitud GET
    $id = $_GET['id'];
    
    // Realizar la conexión a la base de datos (puedes necesitar ajustar esta parte según tu configuración)
    include "conexion.php";
    
    // Intentar eliminar el producto de la base de datos
    $sql = "DELETE FROM ventas WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, enviar una respuesta de éxito
        echo "Producto eliminado correctamente";
    } else {
        // Si ocurrió un error durante la eliminación, enviar una respuesta de error
        echo "Error al eliminar el producto: " . $conexion->error;
    }
} else {
    // Si no se recibió un ID de producto válido, enviar una respuesta de error
    echo "ID de producto no proporcionado";
}
?>
