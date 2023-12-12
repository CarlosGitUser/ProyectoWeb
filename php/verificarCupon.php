<?php
// Conectar a la base de datos (ajusta las credenciales según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtener el identificador del producto desde la solicitud GET
$id_prod = $_GET['productoId'];

// Consulta para verificar si el producto está en el carrito
$sql = "SELECT COUNT(*) as count FROM carrito WHERE id_prod = '$id_prod'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Enviar una respuesta JSON al cliente
    $response = array('enCarrito' => ($row['count'] > 0));
    echo json_encode($response);
} else {
    // Enviar una respuesta JSON al cliente (por ejemplo, si hay un error)
    $response = array('enCarrito' => false);
    echo json_encode($response);
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
