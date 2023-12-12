<?php
$usuario = $_GET["usuario"]; // Recuperar el nombre de usuario de la URL

require "php/conexionBD.php";
$consulta = "SELECT preg_sec, res_preg FROM usuario WHERE cuenta = '$usuario'";
$resultado = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylerecuperar.css">
</head>
<body>
    
</body>
</html>

<?php
if ($resultado && $resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    $pregunta_seguridad = $fila["preg_sec"];
    $respuesta_correcta = $fila["res_preg"];

    // Verificar si se ha enviado el formulario de respuesta
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Si se ha enviado el formulario de respuesta
        if (isset($_POST["respuesta_usuario"])) {
            // Obtener la respuesta proporcionada por el usuario
            $respuesta_usuario = $_POST["respuesta_usuario"];

            // Verificar si la respuesta proporcionada por el usuario es correcta
            if ($respuesta_usuario === $respuesta_correcta) {
                // Respuesta correcta, mostrar formulario para nueva contraseña
                mostrarFormularioNuevaContrasena($usuario);
            } else {
                // Respuesta incorrecta, mostrar mensaje de error
                echo "<p style='color: red;'>La respuesta de seguridad es incorrecta.</p>";
                mostrarFormularioRespuestaSeguridad($usuario, $pregunta_seguridad);
            }
        } elseif (isset($_POST["nueva_contrasena"]) && isset($_POST["confirmar_contrasena"])) {
            // Si se ha enviado el formulario de nueva contraseña
            $nueva_contrasena = $_POST["nueva_contrasena"];
            $confirmar_contrasena = $_POST["confirmar_contrasena"];

            // Verificar que la contraseña y la contraseña confirmada sean iguales
            if ($nueva_contrasena === $confirmar_contrasena) {
                $encriptada = md5($nueva_contrasena);
                $conexion->query("UPDATE usuario SET password = '$encriptada', intentos = 0 WHERE cuenta = '$usuario'");
                header("Location: index.php");
            } else {
                // Contraseñas no coinciden, mostrar mensaje de error
                echo "<p style='color: red;'>Las contraseñas no coinciden.</p>";
                mostrarFormularioNuevaContrasena($usuario);
            }
        }
    } else {
        // Mostrar el formulario para la respuesta de seguridad por primera vez
        mostrarFormularioRespuestaSeguridad($usuario, $pregunta_seguridad);
    }
} else {
    // No se encontró el usuario en la base de datos
    echo "<p style='color: red;'>Error: Usuario no encontrado.</p>";
}

// Cerrar la conexión a la base de datos
$conexion->close();


// Función para mostrar el formulario de respuesta de seguridad
function mostrarFormularioRespuestaSeguridad($usuario, $pregunta_seguridad) {
    echo "<form method='post'>";
    echo "<p>Pregunta de Seguridad: $pregunta_seguridad favorit@</p>";
    echo "<label for='respuesta_usuario'>Respuesta:</label>";
    echo "<input type='text' name='respuesta_usuario' required>";
    echo "<br>";
    echo "<input type='hidden' name='usuario' value='$usuario'>"; // Pasar el usuario en un campo oculto
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}

// Función para mostrar el formulario de nueva contraseña
function mostrarFormularioNuevaContrasena($usuario) {
    echo "<form method='post'>";
    echo "<label for='nueva_contrasena'>Nueva Contraseña:</label>";
    echo "<input type='password' name='nueva_contrasena' required>";
    echo "<br>";
    echo "<label for='confirmar_contrasena'>Confirmar Contraseña:</label>";
    echo "<input type='password' name='confirmar_contrasena' required>";
    echo "<br>";
    echo "<input type='hidden' name='usuario' value='$usuario'>"; // Pasar el usuario en un campo oculto
    echo "<input type='submit' value='Guardar Contraseña'>";
    echo "</form>";
}

?>
