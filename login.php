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
if(isset($_COOKIE['usuario']) && isset($_COOKIE['password'])) {
    $username_cookie = $_COOKIE['usuario'];
    $password_cookie = $_COOKIE['contrasena'];
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            background-color: #fff;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?php echo $username_cookie; ?>" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" value="<?php echo $password_cookie; ?>" required>

            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recordar nombre y contraseña</label>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <?php
            } else {
                // Si no hay cookies, mostrar el formulario vacío para iniciar sesión
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recordar nombre y contraseña</label>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <?php
    }
    ?>
    </div>

</body>
</html>
