<?php
session_start();
if (!isset($_SESSION["intentos_sesion"])) {
    $_SESSION["intentos_sesion"] = 0;
}
include('validar.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realizar la validación llamando a la función validarUsuarioContraseña
    $resultadoValidacion = validarUsuarioContraseña($_POST["usuario"], $_POST["contrasena"]);

    // Mostrar el resultado de la validación
    echo $resultadoValidacion;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
</head>
<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

</body>
</html>
