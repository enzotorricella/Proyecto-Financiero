<?php
// Conexion a la base de datos
require 'Controlador/Conect.php';


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

// Cerrar la conexión
$conn->close();


