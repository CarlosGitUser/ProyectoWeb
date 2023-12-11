<?php
// Conexión a la base de datos
$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

if ($conexion->connect_errno){
    die('Error en la conexion');
}

// Consulta para obtener los productos
$sql = "SELECT id_prod, nombre_prod, descripcion, cantidad, precio, imagen, descuento, categoria FROM producto";
$result = $conexion->query($sql);

$productos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

echo json_encode($productos);

$conexion->close();
?>
