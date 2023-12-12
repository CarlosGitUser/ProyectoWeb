<?php
    session_start();
    
    if (isset($_SESSION['id_usuario'])) {
        // Obtener el ID del usuario de la sesión
        $id_usuario = $_SESSION['id_usuario'];

    
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
    
        // Consulta SQL para eliminar productos del carrito para el usuario específico
        $sql_eliminar_carrito = "DELETE FROM carrito WHERE id_usr = $id_usuario";
    
        // Ejecutar la consulta
        if ($conn->query($sql_eliminar_carrito) === TRUE) {
            header("Location: ../carrito.php");
        }
    
        // Cerrar la conexión
        $conn->close();
    }
    
?>
