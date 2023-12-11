<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_producto']) && isset($_POST['nueva_cantidad'])) {
        // Obtener los valores enviados por la solicitud AJAX
        $id_usuario = $_SESSION['id_usuario'];
        $id_producto = $_POST['id_producto'];
        $nueva_cantidad = $_POST['nueva_cantidad'];
        $nuevo_precio = $_POST['nuevo_precio'];
        
        // Establecer la conexión con la base de datos (cambiar estos valores por los correspondientes a tu base de datos)
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

        // Realizar la actualización en la base de datos
        $sql_update = "UPDATE carrito SET cantidad = $nueva_cantidad, monto = $nuevo_precio WHERE id_prod = $id_producto AND id_usr = $id_usuario";
        $result_update = $conn->query($sql_update);

        if ($result_update) {
            // La actualización fue exitosa
            echo 'Datos actualizados correctamente en la base de datos.';
        } else {
            // La actualización falló
            echo 'Error al actualizar datos en la base de datos.';
        }

        // Cerrar la conexión a la base de datos si es necesario
        // $conn->close();
    } else {
        // No se proporcionaron todos los datos necesarios
        echo 'Error: Faltan parámetros.';
    }
} else {
    // La solicitud no es de tipo POST
    echo 'Error: Método de solicitud no válido.';
}
?>
