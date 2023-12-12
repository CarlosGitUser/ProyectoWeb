<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"]) && !(empty($_FILES["imagen"]["tmp_name"]))) {
    // Conexión a la base de datos (debes tener tus propias credenciales aquí)
    require "php/conexionBD.php";

    // Obtener datos del formulario
    $targetDir = "../image/";
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $targetFile = basename($_FILES["imagen"]["name"]);
    $direccion = $targetDir . basename($_FILES["imagen"]["name"]);
    $descuento = $_POST['descuento'];
    $categoria = $_POST['categoria'];
    
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if ($check !== false) {
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$direccion);
    }
    
    $sql = "INSERT INTO producto (nombre_prod, descripcion, cantidad, precio, imagen, descuento, categoria) VALUES ('$nombre','$descripcion','$cantidad','$precio','$targetFile','$descuento', '$categoria')";
    
    if ($conn->query($sql) === TRUE) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                function exito(){
                    swal("Perfecto", "Producto exitosamente agregado", "success");
                }
            </script>
        </head>
        <body>
            <script>
                exito();
            </script>
        </body>
        </html>
        <?php

        header("Location: ../altas.php");
        exit();
    } else {
        echo "Error al registrar el producto: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>  