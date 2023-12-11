<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylerecuperar.css">
    <title>Bajas</title>
    <style>
        .enviar {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .enviar:hover {
            background-color: #45a049;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: small;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
    </style>
    <script src="js/mostrarProductosAJAX.js"></script>
</head>
<body>
    <?php include "header.php" ?>
    <h2>Eliminar Producto</h2> <!--Formulario :p-->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="opcion">Selecciona el criterio para eliminar producto:</label>
        <select name="opcion" id="opcion" required>
            <option value="id">ID del Producto</option>
            <option value="nombre">Nombre del Producto</option>
        </select><br><br>
        <label for="valor">Producto a eliminar:</label>
        <input type="text" name="valor" required><br><br>
        <input type="submit" value="Eliminar">
    </form>
    <button onclick="mostrarProductos()" class="enviar">Mostrar Productos</button>
    <br><br>
    <div id="tablaProductos">
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $opcion = $_POST["opcion"];
    $valor = $_POST["valor"];

    if ($opcion === "id") {
        $campo = "id_prod";
    } else {
        $campo = "nombre_prod";
    }

    $sql = "DELETE FROM producto WHERE $campo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $valor);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "No se encontró el producto o ocurrió un error al eliminar.";
    }

    $stmt->close();
    $conn->close();
}
?>
