<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
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
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <!-- jQuery (puede ser necesario si SweetAlert2 lo requiere) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<?php
if (!isset($_SESSION["intentos_sesion"])) {
    $_SESSION["intentos_sesion"] = 0;
}
include('validar.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realizar la validación llamando a la función validarUsuarioContraseña
    $resultadoValidacion = validarUsuarioContraseña($_POST["usuario"], $_POST["contrasena"]);

    // Mostrar el resultado de la validación
    if ($resultadoValidacion["result"] == "error_attempt") {
        // Mostrar SweetAlert de error con mensaje de intento fallido
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error en el inicio de sesión',
                    text: 'Usuario o contraseña incorrectos. Intento " . ($resultadoValidacion["attempts"] + 1) . "/3'
                });
            </script>";
    } elseif ($resultadoValidacion["result"] == "error_max_attempts") {
        // Mostrar SweetAlert de error con mensaje de intentos agotados
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error en el inicio de sesión',
                    text: 'Has excedido el número máximo de intentos. ¿Deseas recuperar la contraseña?',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, recuperar contraseña'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'recuperar.php?usuario=" . $resultadoValidacion["usuario"] . "';
                    }
                });
            </script>";
    } elseif ($resultadoValidacion["result"] == "error_user_not_exist") {
        // Mostrar SweetAlert de error con mensaje de usuario no existente
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error en el inicio de sesión',
                    text: 'Usuario o contraseña incorrectos.'
                });
            </script>";
        } elseif ($resultadoValidacion["result"] == "error_captcha") {
        // Mostrar SweetAlert de error con mensaje de usuario no existente
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Captcha incorrecto',
                    text: 'Vuelva a intentar'
                });
            </script>";
    }
}
 ?>

<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?php if(isset($_COOKIE['usuario'])){ echo $_COOKIE['usuario']; } ?>" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" value="<?php if (isset($_COOKIE['contrasena'])){ echo $_COOKIE['contrasena']; } ?>" required>

            <label for="remember">Recordar nombre y contraseña</label>
            <input type="checkbox" id="remember" name="remember">

            <img src="captcha.php" alt="CAPTCHA">
            <input type="text" name="captcha" placeholder="Ingrese el CAPTCHA" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        
    </div>

</body>
</html>
