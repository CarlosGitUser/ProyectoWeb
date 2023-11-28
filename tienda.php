<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Productos</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styleproduct.css">
</head>

<body>
<header class="header">

<a href="#" class="logo"> <i class="fas fa-shopping-cart"></i> The void zone </a>

<nav class="navbar">
        <a href="index.php">Home</a>
        <a href="tienda.php">Productos</a>
        <a href="Vision.php">Acerca De</a>
        <a href="Contactanos.php">Contacto</a>
        <a href="Ayuda.php">Ayuda</a>
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

</header>

<!-- body -->
<div class="wrap">
    <h1>Lista de Productos</h1>
    <div class="store-wrapper">
        <div class="category_list">
            <a href="#" id="category_item" category="all">Todo</a>
            <a href="#" id="category_item" category="peliculas">Peliculas</a>
            <a href="#" id="category_item" category="figuras">Figuras de Accion</a>
        </div>
        <section class="product-list">
            <div class="product-item" category="peliculas">
                <img src="" alt="">
                <a href="#">pelicula terror</a>
            </div>
            <div class="product-item" category="peliculas">
                <img src="" alt="">
                <a href="#">pelicula romance</a>
            </div>
            <div class="product-item" category="peliculas">
                <img src="" alt="">
                <a href="#">pelicula ciencia ficcion</a>
            </div>
            <div class="product-item" category="peliculas">
                <img src="" alt="">
                <a href="#">pelicula comedia</a>
            </div>
        </section>
    </div>
</div>

<!-- fin body -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Sobre nosotros</h3>
            <p>Viviendo la Aventura en cada Fotograma, Transformamos Sueños en Acción!</p>
        </div>

        <div class="box">
            <h3>Categoria</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Terror </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Romance </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Accion </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Ciencia Ficcion </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Comedia </a>
        </div>

        <div class="box">
            <h3>Enlaces Rapidos</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Productos </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Destacados </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Revisar </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Contacto </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Blogs </a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi pedido </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi cuenta </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi listado </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Vende ahora </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Nuevas ofertas </a>
        </div>

    </div>

    <div class="share">
        <a href="https://facebook.com/freewebsitecode" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

    <div class="credit"> &copy; copyright @ 2021 by <span><a href="">sitio de peliculas</a></span> </div>
    
</section>

<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>

