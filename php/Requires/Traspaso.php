<?php
//Conexion a la base de datos
require 'Conect.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $categoria = $_POST['categoria'];
  $monto = $_POST['monto'];
  $descripcion = $_POST['descripcion'];

  // Escapar caracteres especiales para evitar inyecciones SQL
  $categoria = $conn->real_escape_string($categoria);
  $monto = $conn->real_escape_string($monto);
  $descripcion = $conn->real_escape_string($descripcion);

  // Determinar la tabla destino según la categoría seleccionada
  $tabla = ($categoria == 'ingreso') ? 'ingresos' : 'egresos';

  // Crear la consulta de inserción
  $sql = "INSERT INTO $tabla (monto, descripcion) VALUES ('$monto', '$descripcion')";

  // Ejecutar la consulta de inserción
  if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente en la base de datos.";
  } else {
    echo "Error al insertar los datos: " . $conn->error;
  }

  // Cerrar la conexión
  $conn->close();
}
?>
