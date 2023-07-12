<?php
// Información de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finanzas";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    $confirmationMessage = "Conexión establecida correctamente a la base de datos.";
}
?>

<!-- Estilos CSS para el mensaje de confirmación -->
<style>
    #confirmationMessage {
        display: none;
        background-color: #f0f0f0;
        padding: 5px;
        border-radius: 10px;
        font-weight: bold;
        text-align: center;
        animation: fade-in-out 10s ease-in-out;
    }

    @keyframes fade-in-out {
        0% {
            opacity: 0;
        }

        20% {
            opacity: 1;
        }

        80% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<!-- Incluir la biblioteca de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Mostrar el mensaje de confirmación utilizando PHP y JavaScript -->
<?php if (isset($confirmationMessage)) : ?>
    <div id="confirmationMessage">
        <i class="fas fa-database"></i> <?php echo $confirmationMessage; ?>
    </div>

    <script>
        // Mostrar el mensaje de confirmación
        document.getElementById("confirmationMessage").style.display = "block";

        // Esperar 10 segundos y ocultar el mensaje de confirmación
        setTimeout(function() {
            document.getElementById("confirmationMessage").style.display = "none";
        }, 10000);
    </script>
<?php endif; ?>

