<!DOCTYPE html>
<html>
<head>
    <title>Bajas</title>
</head>
<body>
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
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "127.0.0.1:33065";
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
