<?php
//Conexion a bae de datos en otro script
require 'Conect.php';

$categoria = $_POST['categoria'];
$monto = $_POST['monto'];
$descripcion = $_POST['descripcion'];

// Escapar caracteres especiales para evitar inyecciones SQL
$categoria = $conn->real_escape_string($categoria);
$monto = $conn->real_escape_string($monto);
$descripcion = $conn->real_escape_string($descripcion);

// Crear la consulta de inserción
$sql = "INSERT INTO nombre_tabla (categoria, monto, descripcion) VALUES ('$categoria', '$monto', '$descripcion')";

// Ejecutar la consulta de inserción
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente en la base de datos.";
} else {
    echo "Error al insertar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>