<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['usuario']!='admin'){
    header('Location: index.php');
}
?>
<?php
$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

if ($conexion->connect_errno){
    die('Error en la conexion');
}

$sql = "SELECT id_prod, nombre_prod, cantidad FROM producto";
$result = $conexion->query($sql);

// Crear un array para almacenar los resultados
$productos = array();

// Obtener los datos de la consulta
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

// Convertir los datos a formato JSON para utilizarlos en JavaScript
$productos_json = json_encode($productos);

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
    <h1 style="text-align: center;">Inventario</h1>
    <canvas id="graficoInventario" width="400" height="400"></canvas> 
    <script>
        window.addEventListener('DOMContentLoaded', function() {
        // Obtener los datos de productos desde PHP
        var productosData = <?php echo $productos_json; ?>;

        // Preparar los datos para Chart.js
        var nombresProductos = [];
        var cantidadesProductos = [];

        productosData.forEach(function(producto) {
            nombresProductos.push(producto.nombre_prod);
            cantidadesProductos.push(parseInt(producto.cantidad));
        });

        // Crear el gráfico con Chart.js
        var ctx = document.getElementById('graficoInventario').getContext('2d');
        var chart = new Chart(ctx, {
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
        })
    });
    </script>
    <?php include "footer.php" ?>
</body>
</html>