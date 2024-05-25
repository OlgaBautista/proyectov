<?php
// Verifica si se recibió el ID del producto
if (isset($_POST['idProducto'])) {
    // Obtén el ID del producto seleccionado
    $idProducto = $_POST['idProducto'];

    // Configuración de la conexión a la base de datos
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "inventariov";

    // Establece la conexión a la base de datos
    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

    // Verifica si la conexión tuvo éxito
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    // Establece el conjunto de caracteres utf8 para la conexión
    if (!$conexion->set_charset("utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", $conexion->error);
    }

    // Consulta SQL para obtener los detalles del producto
    $consulta = "SELECT nombre , codigo, precio FROM altas WHERE id = $idProducto";

    // Ejecuta la consulta en la base de datos
    $resultado = mysqli_query($conexion, $consulta);

    // Verifica si se obtuvieron resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Obtiene los detalles del producto
        $producto = mysqli_fetch_assoc($resultado);

        // Devuelve los detalles del producto en formato JSON
        echo json_encode($producto);
    } else {
        // No se encontraron resultados
        echo json_encode(array('error' => 'No se encontraron resultados para el ID de producto proporcionado'));
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si no se recibió el ID del producto
    echo json_encode(array('error' => 'No se recibió el ID del producto'));
}
?>