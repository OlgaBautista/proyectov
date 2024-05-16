<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado
if (empty($_SESSION["id"])) {
  header("location: http://127.0.0.1/proyectov/");
  exit(); // Terminar el script para evitar ejecución adicional
}

// Incluir el archivo de conexión a la base de datos
include "conexion.php";

// Verificar si se han recibido los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tablaHTML"]) && isset($_POST["totalAcumulado"])) {
  // Obtener los datos del formulario
  $tablaHTML = $_POST["tablaHTML"];
  $totalAcumulado = $_POST["totalAcumulado"];

  // Insertar los datos en la tabla de ventas
  $sql = "INSERT INTO ventas (nombre, codigo, precio, cantidad, fecha_hora) VALUES (?, ?, ?, ?, ?)";
  
  // Preparar la consulta
  if ($stmt = $conexion->prepare($sql)) {
    // Vincular los parámetros
    $stmt->bind_param("ssdsd", $nombre, $codigo, $precio, $cantidad, $fecha_hora);

    // Recorrer las filas de la tabla HTML
    $doc = new DOMDocument();
    $doc->loadHTML($tablaHTML);
    $rows = $doc->getElementsByTagName('tr');
    foreach ($rows as $row) {
      // Obtener los datos de cada celda
      $cells = $row->getElementsByTagName('td');
      if ($cells->length == 6) { // Asegurar que hay 6 celdas (datos de la tabla)
        $nombre= $cells[0]->nodeValue;
        $codigo = $cells[1]->nodeValue;
        $precio = floatval($cells[2]->nodeValue);
        $cantidad = intval($cells[3]->nodeValue);
        $fechaHora = $cells[4]->nodeValue;

        // Ejecutar la consulta preparada
        if (!$stmt->execute()) {
          // Si ocurre un error, imprimir el mensaje de error
          echo "Error al insertar en la base de datos: " . $conexion->error;
        }
      }
    }
    // Cerrar la declaración
    $stmt->close();
  } else {
    // Si ocurre un error al preparar la consulta, imprimir el mensaje de error
    echo "Error al preparar la consulta: " . $conexion->error;
  }

  // Redireccionar al formulario con un mensaje de éxito
  header("location: formulario.php?success=true");
} else {
  // Si no se recibieron los datos del formulario, redireccionar al formulario
  header("location: formulario.php");
}
?>
