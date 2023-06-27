<?php
// Información de conexión a la base de datos
$servername = "localhosta";
$username = "root";
$password = "";
$dbname = "finanzas";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Ejecutar consultas o realizar operaciones en la base de datos aquí


?>
