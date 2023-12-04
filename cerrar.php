<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cerrar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .message {
            font-size: 18px;
            color: #333;
        }

        .redirect-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="message">
            <p>Has cerrado sesión exitosamente.</p>
        </div>
        <a href="index.php" class="redirect-link">Ir a la página de inicio de sesión</a>
    </div>

</body>
</html>
<?php
// Destruir todas las variables de sesión
session_destroy();

// Redirigir a la página de inicio de sesión (o cualquier otra página que desees)
//header("Location: index.php");
//exit();
?>