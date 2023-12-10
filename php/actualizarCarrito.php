<?php
session_start();

if (isset($_SESSION['id_usuario']) && isset($_POST['id_producto']) && isset($_POST['cantidad']) && isset($_POST['precio'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $id_producto = $_POST['id_producto'];
    $nueva_cantidad = $_POST['cantidad'];
    $nuevo_precio = $_POST['precio'];

    // Actualizar la cantidad y el precio en la tabla 'carrito' en la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Actualizar la cantidad y el precio en el carrito
    $sql = "UPDATE carrito SET cantidad = $nueva_cantidad, monto = $nuevo_precio WHERE id_usr = $id_usuario AND id_prod = $id_producto";

    if ($conn->query($sql) === TRUE) {
        echo "La cantidad y el precio se actualizaron correctamente en la base de datos";
    } else {
        echo "Error al actualizar la cantidad y el precio: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Error: Datos faltantes";
}
?>
