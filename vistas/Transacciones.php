<?php require_once 'Controlador\Conect.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control Financiero</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <?php require_once 'Modif_vista\Nav.php'; ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Registro de Transacciones</h2>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <form id="filtro-form" class="form-inline form-row">
              <div class="form-group col-md-10">
                <label for="mes">Fecha:</label>
                <input type="date" id="mes" class="form-control" placeholder="fecha">
                <button type="submit" class="btn btn-primary">Filtrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <br>
    <table id="tabla-transacciones" class="table">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Descripción</th>
          <th>Monto</th>
        </tr>
      </thead>
      <tbody>
        <!-- Filas de transacciones -->
        <?php
        // Consulta SQL para obtener los datos de las transacciones de ingresos
        $sqlIngresos = "SELECT fecha, descripcion, monto FROM ingresos";
        $resultadoIngresos = $conn->query($sqlIngresos);

        // Consulta SQL para obtener los datos de las transacciones de egresos
        $sqlEgresos = "SELECT fecha, descripcion, monto FROM egresos";
        $resultadoEgresos = $conn->query($sqlEgresos);

        // Verificar si hay filas devueltas por la consulta de ingresos
        if ($resultadoIngresos->num_rows > 0) {
          // Recorrer los resultados de ingresos y generar las filas de la tabla
          while ($fila = $resultadoIngresos->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['fecha'] . "</td>";
            echo "<td>" . $fila['descripcion'] . "</td>";
            echo "<td>" . $fila['monto'] . "</td>";
            echo "</tr>";
          }
        }

        // Verificar si hay filas devueltas por la consulta de egresos
        if ($resultadoEgresos->num_rows > 0) {
          // Recorrer los resultados de egresos y generar las filas de la tabla
          while ($fila = $resultadoEgresos->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['fecha'] . "</td>";
            echo "<td>" . $fila['descripcion'] . "</td>";
            echo "<td>" . $fila['monto'] . "</td>";
            echo "</tr>";
          }
        }

        // Cerrar la conexión
        $conn->close();
        ?>

      </tbody>
    </table>
  </div>

  <!-- Agregar scripts de Bootstrap, jQuery y nuestro script personalizado -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      // Capturar el evento de envío del formulario
      $('#filtro-form').submit(function(event) {
        event.preventDefault(); // Evitar el envío del formulario

        // Obtener los valores de los campos de entrada
        var ano = $('#ano').val();
        var mes = $('#mes').val();
        var dia = $('#dia').val();

        // Filtrar las transacciones según los valores ingresados
        filtrarTransacciones(ano, mes, dia);
      });

      // Función para filtrar las transacciones
      function filtrarTransacciones(ano, mes, dia) {
        // Obtener la tabla y las filas de transacciones
        var tabla = $('#tabla-transacciones');
        var filas = tabla.find('tbody tr');

        // Recorrer las filas y ocultar las que no coincidan con el filtro
        filas.each(function() {
          var fila = $(this);
          var fecha = fila.find('td:first-child').text();

          // Verificar si la fecha coincide con el filtro
          if (ano && fecha.indexOf(ano) === -1) {
            fila.hide();
          } else if (mes && fecha.indexOf(mes) === -1) {
            fila.hide();
          } else if (dia && fecha.indexOf(dia) === -1) {
            fila.hide();
          } else {
            fila.show();
          }
        });
      }
    });
  </script>
</body>

</html>
