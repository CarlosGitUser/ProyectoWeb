<?php
// Iniciar la sesión (asegúrate de llamar a session_start() al inicio de cada archivo PHP donde necesites utilizar sesiones)
session_start();

// Verificar si el usuario tiene una sesión iniciada
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

    $total = 0;
    // Consulta SQL para obtener los productos en el carrito del usuario específico
    $sql = "SELECT id_prod, cantidad, monto FROM carrito WHERE id_usr = $id_usuario";

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
        // Mostrar los productos en el carrito
        echo "<table>";
        echo "<tr><th>Nombre del Producto</th><th>Unidades</th><th>Costo</th></tr>";
        $total = 0; // Inicializar la variable para almacenar el total de los montos
        while ($row = $result->fetch_assoc()) {
            $id_producto = $row["id_prod"];
            
            // Consulta adicional para obtener el nombre, precio y descuento del producto basado en el ID del producto en el carrito
            $sql_producto = "SELECT nombre_prod, precio, descuento FROM producto WHERE id_prod = $id_producto";
            $result_producto = $conn->query($sql_producto);
            
            if ($result_producto->num_rows > 0) {
                $row_producto = $result_producto->fetch_assoc();
                $nombre_producto = $row_producto["nombre_prod"];
                $precio_unitario = $row_producto["precio"];
                $descuento = $row_producto["descuento"];
                
                // Calcular el precio con descuento
                $precio_descuento = $precio_unitario * ($descuento); // Precio con descuento aplicado
                
                echo "<tr>";
                echo "<td>".$nombre_producto."</td>";
                echo "<td><input type='number' min='1' value='".$row["cantidad"]."' data-id='".$row["id_prod"]."' onchange='actualizarCantidad(this, ".$precio_descuento.")'></td>";
                echo "<td id='precio_".$row["id_prod"]."'>$".$row["monto"]."</td>";
                echo "</tr>";
                $total += $row["monto"]; // Sumar el monto del producto al total
            }
        }
        echo "<td colspan='2'>Total: </td> <td id='total'>" . $total . "</td>";
        echo "</table>";
    } else {
        echo "No se encontraron productos en el carrito para el usuario $id_usuario";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si el usuario no tiene una sesión iniciada, redirigirlo a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
<script>
// Función para actualizar la cantidad en la base de datos y el precio en la interfaz
function actualizarCantidad(input, descu) {
    var nuevaCantidad = input.value;
    var idProducto = input.getAttribute('data-id');

    // Calcular el nuevo precio con el descuento aplicado
    var nuevoPrecio = nuevaCantidad * descu;

    // Actualizar el precio en la interfaz
    document.getElementById('precio_' + idProducto).innerText = '$' + nuevoPrecio.toFixed(2);
    
    var rows = document.querySelectorAll("input[data-id]");
    var total = 0;

    rows.forEach(function(row) {
        var id = row.getAttribute('data-id');
        var cantidad = parseInt(row.value);
        var precioDescuento = parseFloat(document.getElementById('precio_' + id).innerText.replace('$', ''));
        total += precioDescuento;
    });

    // Mostrar el total actualizado en la interfaz
    document.getElementById('total').innerText = '$' + total.toFixed(2);
    // Aquí puedes realizar una solicitud AJAX para actualizar la base de datos con la nueva cantidad
    // Usar AJAX, Fetch API u otro método para enviar los datos al servidor
}
</script>