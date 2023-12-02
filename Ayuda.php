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
<?php include "footer.php"; ?>
<!-- footer section ends -->




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>

