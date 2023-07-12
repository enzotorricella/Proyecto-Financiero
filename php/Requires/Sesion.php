<?php
session_start();

// Comprueba si la sesión ya está iniciada
if (!isset($_SESSION['sesion_iniciada'])) {
  // Inicia la sesión
  $_SESSION['sesion_iniciada'] = true;
  
  // Inserta el valor en la base de datos
  // (Aquí debes agregar tu código para insertar el valor en la base de datos)
  
  // Destruye la sesión
  session_destroy();
}
?>
