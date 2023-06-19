<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control Financiero</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Panel de Control</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Transacciones.html">Transacciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Informes.html">Informes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Configuraciones.html">Configuración</a>
        </li>
      </ul>
    </div>
  </nav>
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
        <label for="metas">Metas financieras:</label>
        <textarea class="form-control" id="metas" rows="3"></textarea>
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