<?php
session_start();

if (isset($_SESSION["usuario"])) {
    // Obtener el nombre de usuario desde la sesión
    $nombre_usuario = $_SESSION["usuario"];

    // Conectar a la base de datos (ajusta según tu configuración)
    require "php/conexionBD.php";

    // Consulta para obtener el id_usr a partir del nombre de usuario
    $consulta_id = "SELECT id_usr FROM usuario WHERE nombre = '$nombre_usuario'";
    $resultado_id = $conexion->query($consulta_id);

    // Verificar si la consulta fue exitosa
    if ($resultado_id) {
        // Verificar si se encontró un usuario con ese nombre
        if ($resultado_id->num_rows > 0) {
            // Obtener el id del usuario
            $fila_id = $resultado_id->fetch_assoc();
            $id_usr = $fila_id['id_usr'];

            // Verificar si se ha enviado un ID de producto a través de GET
            if (isset($_GET['id_prod'])) {
                $id_prod = $_GET['id_prod'];
                $precio = $_GET['precio'];
                $cantidad = $_GET['cantidad'];

                // Consulta para verificar si el producto ya está en el carrito
                $consulta_carrito = "SELECT * FROM carrito WHERE id_usr = $id_usr AND id_prod = $id_prod";
                $resultado_carrito = $conexion->query($consulta_carrito);

                if ($resultado_carrito->num_rows > 0) {
                    // El producto ya está en el carrito, actualiza la cantidad
                    $fila_carrito = $resultado_carrito->fetch_assoc();
                    $id_carrito = $fila_carrito['id_carrito'];

                    $actualizar = "UPDATE carrito SET cantidad = cantidad + $cantidad, monto = $precio * cantidad WHERE id_carrito = $id_carrito";
                    $conexion->query($actualizar);
                } else {
                    // El producto no está en el carrito, agrégalo
                    $nuevo_carrito = "INSERT INTO carrito (id_usr, id_prod, cantidad, monto) VALUES ($id_usr, $id_prod, $cantidad, $cantidad * $precio)";
                    $conexion->query($nuevo_carrito);
                }

                // Cerrar la conexión a la base de datos
                $conexion->close();

                if(isset($_GET['pag'])){
                    $pag = $_GET['pag'];
                    header('Location: ../' . $pag);
                }else{
                    echo "<script>

                    var id = '".$id_prod."'; // Obtiene el id desde el atributo data-id
                    var url = '../productPage.php';

                    // Crea un formulario dinámicamente
                    var form = document.createElement('form');
                    form.method = 'post';
                    form.action = url;

                    // Crea un input oculto para enviar el id
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'id';
                    input.value = id;

                    // Agrega el input al formulario
                    form.appendChild(input);

                    // Agrega el formulario al cuerpo del documento y lo envía
                    document.documentElement.appendChild(form);
                    form.submit();
                </script>";
                }
                

                // Redirigir a la página del carrito o a donde sea necesario
                
                exit();
            } else {
                echo "Falta el parámetro 'id_prod' en la URL";
            }
        } else {
            echo "No se encontró ningún usuario con el nombre '$nombre_usuario'";
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
