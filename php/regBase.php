<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (debes tener tus propias credenciales aquí)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $usuario = $_POST['usuario'];
    $nomCuenta = $_POST['nombreCuenta'];
    $correo = $_POST['correo'];
    $pregunta = $_POST['preguntaSeguridad'];
    $respuesta = $_POST['respuestaSeguridad'];
    $contra = $_POST['contraseña'];
    
    $contraseña_encriptada = md5($contra);

    $sql = "INSERT INTO usuario (nombre, cuenta, correo, password, preg_sec, res_preg) VALUES ('$usuario','$nomCuenta','$correo','$contraseña_encriptada','$pregunta','$respuesta')";
    
    if ($conn->query($sql) === TRUE) {
        // Si la inserción fue exitosa, redireccionar o mostrar un mensaje de éxito
        //header("Location: registro_exitoso.html");
        exit();
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>  