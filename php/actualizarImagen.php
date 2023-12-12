<?php
session_start();

if (isset($_SESSION["usuario"])) {
    $id = $_SESSION["id_usuario"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

        // Obtener la cantidad total de productos en el carrito
        $sql_carrito = "SELECT SUM(cantidad) AS total_cantidad FROM carrito WHERE id_usr = $id";
        $result_carrito = $conn->query($sql_carrito);

        if ($result_carrito) {
            $row_carrito = $result_carrito->fetch_assoc();
            $total_cantidad = $row_carrito["total_cantidad"];

            // Devolver la cantidad total sin espacios adicionales
            echo trim($total_cantidad);
        }

    $conn->close();
}
?>
