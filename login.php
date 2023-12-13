<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <style>
        
        body {
            margin: 0;
            padding: 0;
            background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
        }

        h2 {
            text-align: center;
            color: white;
            margin-top: 30px;
            font-weight: bold;
            font-size: 40px;
            transition: color 0.3s ease;
        }
        h2:hover {
        color: #5861b6; /* Cambia el color al pasar el ratón sobre el título */
        }


        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ad9afa;
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
            background-color: #5861b6;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2b2a42;
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
        <div>
            <label for="remember">Recordar nombre y contraseña <input type="checkbox" id="remember" name="remember"></label>
            
        </div>

        <img src="captcha.php" alt="CAPTCHA">
        <input type="text" name="captcha" placeholder="Ingrese el CAPTCHA" required>

        <button type="submit">Iniciar Sesión</button>

        <a href="index.php">
            <button type="button" class="btn btn-dark">Volver</button>
        </a>
    </form>
    </div>

</body>
</html>
