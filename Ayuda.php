<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header -->

<?php include "header.php"; ?>

<div id="qa-container">
        <h1>Preguntas y Respuestas - Tienda de Películas y Figuras de Acción</h1>

        <div class="question">
            <strong>Pregunta 1:</strong>
            <p>¿Cuáles son las películas más populares en la tienda?</p>
            <p><strong>Respuesta:</strong> Nuestras películas más populares incluyen títulos como "Aventuras en la Ciudad" y "Héroes del Espacio".</p>
        </div>

        <div class="question">
            <strong>Pregunta 2:</strong>
            <p>¿Tienen figuras de acción de superhéroes?</p>
            <p><strong>Respuesta:</strong> Sí, contamos con una amplia selección de figuras de acción de superhéroes, incluyendo personajes icónicos como Superman, Batman y Spider-Man.</p>
        </div>

        <form>
            <label for="ask">Haz una pregunta sobre películas o figuras de acción:</label>
            <textarea id="ask" name="ask" rows="4" required></textarea>
            <button type="submit">Enviar Pregunta</button>
        </form>
</div>


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Nuestro lema</h3>
            <p>¡Transforma tu mundo cinéfilo con nuestra colección de películas y figuras de acción extraordinarias!</p>
        </div>

        <div class="box">
            <h3>Categorias</h3>
            <a href="tienda.php"> <i class="fas fa-arrow-right"></i> Peliculas </a>
            <a href="tienda.php"> <i class="fas fa-arrow-right"></i> Figuras de acción </a>
        </div>

        <div class="box">
            <h3>Enlaces Rapidos</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="tienda.php"> <i class="fas fa-arrow-right"></i> Productos </a>
            <a href="Vision.php"> <i class="fas fa-arrow-right"></i> Acerca de </a>
            <a href="Contactanos.php"> <i class="fas fa-arrow-right"></i> Contacto </a>
            <a href="Ayuda.php"> <i class="fas fa-arrow-right"></i> Ayuda </a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi pedido </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi cuenta </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi listado </a>
        </div>

    </div>

    <div class="share">
        <a href="https://facebook.com/freewebsitecode" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

    <div class="credit"> &copy; copyright @ 2021 by <span><a href="">sitio de peliculas y figuras de accion</a></span> </div>
    
</section>

<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>

