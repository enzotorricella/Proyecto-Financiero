<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control Financiero</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php require_once 'php/requires/nav.php'; ?>

  <br>
<div class="container-fluid">
    
  <div class="container">
    <h1>Configuraciones</h1>
    <form>
      <div class="form-group">
        <label for="moneda">Moneda por defecto:</label>
        <select class="form-control" id="moneda">
          <option>USD</option>
          <option>EUR</option>
          <option>GBP</option>
          <option>JPY</option>
          <option>ARS</option>
        </select>
      </div>
      <div class="form-group">
        <label for="nombreUsuario">Cambiar nombre de usuario:</label>
        <input type="text" class="form-control" id="nombreUsuario">
      </div>
      <div class="form-group">
        <label for="contrasena">Modificar contraseña:</label>
        <input type="password" class="form-control" id="contrasena">
      </div>
      <div class="form-group">
        <label for="presupuesto">Presupuesto mensual:</label>
        <input type="number" class="form-control" id="presupuesto">
      </div>
      <div class="form-group">
        <label for="presupuesto">Meta de ahorro:</label>
        <input type="number" class="form-control" id="presupuesto">
      </div>
      <div class="form-group">
        <label for="idioma">Configuración de idioma:</label>
        <select class="form-control" id="idioma">
          <option>Español</option>
          <option>Inglés</option>
          <option>Alemán</option>
          <option>Francés</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Guardar configuraciones</button>
    </form>
  </div>
</div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>