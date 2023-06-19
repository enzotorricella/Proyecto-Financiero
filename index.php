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
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-success text-white mb-3">
          <div class="card-body">
            <h5 class="card-title">Ingresos</h5>
            <p class="card-text">+$10,000</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-danger text-white mb-3">
          <div class="card-body">
            <h5 class="card-title">Egresos</h5>
            <p class="card-text">-$7,000</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-warning text-white mb-3">
          <div class="card-body">
            <h5 class="card-title ">Ahorros</h5>
            <p class="card-text">$5,000</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        
  <br>
    <div class="container">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Registrar Transacción</h5>
                <form>
                  <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select class="form-control" id="categoria">
                      <option value="ingreso">Ingreso</option>
                      <option value="egreso">Egreso</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="monto">Monto</label>
                    <input type="number" class="form-control" id="monto">
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion">
                  </div>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Consumos por Categoría</h5>
                <canvas id="chart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
          
</div>
</div>
    
  
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Código JavaScript para la generación de la gráfica de consumos
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Alimentos', 'Transporte', 'Entretenimiento'],
        datasets: [{
          data: [40, 30, 20],
          backgroundColor: ['#ff6384', '#36a2eb', '#ffce56'],
        }]
      },
    });
  </script>
</body>
</html>