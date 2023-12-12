<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_producto = $_POST['id'];
    $nueva_cantidad = $_POST['cantidad'];

    // Realizar la actualización en la base de datos
    $sql_actualizar = "UPDATE carrito SET cantidad = $nueva_cantidad WHERE id_prod = $id_producto";
    $result_actualizar = $conn->query($sql_actualizar);

    if ($result_actualizar) {
        // La actualización fue exitosa
        echo json_encode(['success' => true]);
    } else {
        // La actualización falló
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
} else {
    // Si no es una solicitud POST, redirigir o manejar según sea necesario
}
?>
