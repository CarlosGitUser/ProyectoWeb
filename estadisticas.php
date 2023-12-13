<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['usuario'] != 'admin'){
    header('Location: index.php');
    exit(); // Para detener la ejecución si el usuario no es admin
}

$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'tienda';

$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno){
    die('Error en la conexión: ' . $conexion->connect_error);
}

// Consulta para obtener datos de productos
$sqlProductos = "SELECT nombre_prod, cantidad FROM producto";
$resultProductos = $conexion->query($sqlProductos);

// Crear arrays para almacenar los resultados de productos
$nombresProductos = [];
$cantidadesProductos = [];

// Obtener los datos de la consulta de productos
if ($resultProductos->num_rows > 0) {
    while($row = $resultProductos->fetch_assoc()) {
        $nombresProductos[] = $row['nombre_prod'];
        $cantidadesProductos[] = intval($row['cantidad']);
    }
}

// Consulta para contar el número de usuarios registrados
$sqlUsuarios = "SELECT COUNT(*) as totalUsuarios FROM usuario";
$resultUsuarios = $conexion->query($sqlUsuarios);
$totalUsuarios = $resultUsuarios->fetch_assoc()['totalUsuarios'];

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include "header.php" ?>
    <br><br><br><br><br><br><br><br><br><br><br>
    
    <div style="text-align: center;">
        <h1>Inventario</h1>
        <canvas id="graficoInventario" width="400" height="400"></canvas> 
        <br><br>
        <h1>Número de Usuarios Registrados: <?php echo $totalUsuarios; ?></h1>
        <canvas id="graficoUsuarios" width="400" height="400"></canvas> 
    </div>

    <script>
        // Datos del inventario para Chart.js
        var nombresProductos = <?php echo json_encode($nombresProductos); ?>;
        var cantidadesProductos = <?php echo json_encode($cantidadesProductos); ?>;

        // Crear el gráfico de inventario con Chart.js
        var ctxInventario = document.getElementById('graficoInventario').getContext('2d');
        var chartInventario = new Chart(ctxInventario, {
            type: 'bar',
            data: {
                labels: nombresProductos,
                datasets: [{
                    label: 'Inventario de Productos',
                    data: cantidadesProductos,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Color de las barras
                    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde de las barras
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Datos de usuarios para Chart.js
        var totalUsuarios = <?php echo $totalUsuarios; ?>;
        var dataUsuarios = {
            labels: ['Registrados'],
            datasets: [{
                label: 'Usuarios Registrados',
                data: [totalUsuarios],
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // Color del gráfico de usuarios
                borderColor: 'rgba(255, 99, 132, 1)', // Color del borde del gráfico de usuarios
                borderWidth: 1
            }]
        };

        // Crear el gráfico de usuarios registrados con Chart.js
        var ctxUsuarios = document.getElementById('graficoUsuarios').getContext('2d');
        var chartUsuarios = new Chart(ctxUsuarios, {
            type: 'bar',
            data: dataUsuarios,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>

    <?php include "footer.php" ?>
</body>
</html>
