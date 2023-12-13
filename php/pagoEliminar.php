<?php
    
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
    
        // Consulta SQL para obtener productos del carrito para el usuario específico
        $consulta_carrito = "SELECT id_prod, cantidad FROM carrito WHERE id_usr = $id_usuario";
        $resultado_carrito = $conn->query($consulta_carrito);

        // Verificar si la consulta fue exitosa
        if ($resultado_carrito) {
            // Actualizar la cantidad en la tabla productos restando la cantidad obtenida de la tabla carritos
            while ($fila = $resultado_carrito->fetch_assoc()) {
                $id_prod = $fila['id_prod'];
                $cantidad = $fila['cantidad'];

                $stmt = $conn->prepare("UPDATE producto SET cantidad = cantidad - ? WHERE id_prod = ?");
                $stmt->bind_param('ii', $cantidad, $id_prod);
                $stmt->execute();
            }

            // Eliminar los elementos de la tabla carritos que tienen el id_usr especificado
            $eliminar_carrito = "DELETE FROM carrito WHERE id_usr = $id_usuario";
            $conn->query($eliminar_carrito);
        } else {
            echo "Error en la consulta: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
        header('Location: index.php');
    }
?>
