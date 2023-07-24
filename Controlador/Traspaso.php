<?php
// Conexion a la base de datos
require 'Controlador/Conect.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $categoria = $_POST['categoria'];
  $monto = $_POST['monto'];
  $descripcion = $_POST['descripcion'];

  // Escapar caracteres especiales para evitar inyecciones SQL
  $categoria = $conn->real_escape_string($categoria);
  $monto = $conn->real_escape_string($monto);
  $descripcion = $conn->real_escape_string($descripcion);

  // Obtener la fecha actual en formato YYYY-MM-DD
  $fecha = date("Y-m-d");

  // Determinar la tabla destino según la categoría seleccionada
  $tabla = ($categoria == 'ingreso') ? 'ingresos' : 'egresos';

  // Crear la consulta de inserción con la fecha actual
  $sql = "INSERT INTO $tabla (fecha, monto, descripcion) VALUES ('$fecha', '$monto', '$descripcion')";

  // Ejecutar la consulta de inserción
  if ($conn->query($sql) === TRUE) {
    // Consulta SQL para obtener la sumatoria de los montos de ingresos
    $sqlIngresos = "SELECT COALESCE(SUM(monto), 0) AS total FROM ingresos";

    // Ejecutar la consulta de ingresos
    $resultadoIngresos = $conn->query($sqlIngresos);

    // Obtener el resultado de la sumatoria de ingresos
    $totalIngresos = 0;
    if ($resultadoIngresos->num_rows > 0) {
      $filaIngresos = $resultadoIngresos->fetch_assoc();
      $totalIngresos = $filaIngresos['total'];
    }

    // Consulta SQL para obtener la sumatoria de los montos de egresos
    $sqlEgresos = "SELECT COALESCE(SUM(monto), 0) AS total FROM egresos";

    // Ejecutar la consulta de egresos
    $resultadoEgresos = $conn->query($sqlEgresos);

    // Obtener el resultado de la sumatoria de egresos
    $totalEgresos = 0;
    if ($resultadoEgresos->num_rows > 0) {
      $filaEgresos = $resultadoEgresos->fetch_assoc();
      $totalEgresos = $filaEgresos['total'];
    }

    echo "Datos insertados correctamente en la base de datos.";
  } else {
    echo "Error al insertar los datos: " . $conn->error;
  }

  // Cerrar la conexión
  $conn->close();

  // Restablecer las variables a cero
  $categoria = '';
  $monto = 0;
  $descripcion = '';
}


