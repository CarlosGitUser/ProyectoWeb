<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">
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
                if($_SESSION["usuario"]=="admin")
                    echo '<a href="#">Altas y bajas</a>';
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