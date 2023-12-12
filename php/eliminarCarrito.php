<?php
    session_start();
    
    if (isset($_SESSION['id_usuario'])) {
        // Obtener el ID del usuario de la sesión
        $id_usuario = $_SESSION['id_usuario'];
        echo $id_usuario;
        $id_prod = $_GET['id_prod'];
        echo $id_prod;
    
        // Establecer la conexión con la base de datos (cambiar estos valores por los correspondientes a tu base de datos)
        require "php/conexionBD.php";
        // Consulta SQL para eliminar productos del carrito para el usuario específico
        $sql_eliminar_carrito = "DELETE FROM carrito WHERE id_usr = $id_usuario AND id_prod = $id_prod";
    
        // Ejecutar la consulta
        if ($conn->query($sql_eliminar_carrito) === TRUE) {
            header("Location: ../carrito.php");
        }
    
        // Cerrar la conexión
        $conn->close();
    }
    
?>
