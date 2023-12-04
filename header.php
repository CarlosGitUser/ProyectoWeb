<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" type="image/x-icon" href="image/logo.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <style>
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
            font-size: 18px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        input[type="file"],
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

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header class="header">

        <a href="#" class="logo">
        <img src="image/logo4.png" alt="The void zone">
        </a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="tienda.php">Productos</a>
            <a href="Vision.php">Acerca De</a>
            <a href="Contactanos.php">Contacto</a>
            <a href="Ayuda.php">Ayuda</a>
            <?php
                if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]=="admin")
                echo '
                <div class="dropdown">
                    <button class="dropbtn" style="background-color: #4caf50; color:white">Administrador</button>
                    <div class="dropdown-content">
                        <a href="altas.php">Altas</a>
                        <a href="bajas.php">Bajas</a>
                        <a href="cambios.php">Cambios</a>
                        </div>
                </div>
                ';
            ?>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            
        </div>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <?php
            if (isset($_SESSION["usuario"])) {
                echo '
                <div class="dropdown">
                    <button class="dropbtn">'. $_SESSION["usuario"] .'</button>
                    <div class="dropdown-content">
                        <a href="cerrar.php">Cerrar Sesion</a>
                    </div>
                </div>
                ';
            } else {
                echo '
                <div class="dropdown">
                    <button class="dropbtn" style="background-color: #4caf50; color:white">login</button>
                    <div class="dropdown-content">
                        <a href="login.php">Iniciar Sesión</a>
                        <a href="registro.php">Registrarse</a>
                    </div>
                </div>
                ';
            }
                        
        ?>
    </header>
</body>
</html>