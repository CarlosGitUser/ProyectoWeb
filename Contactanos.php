<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header -->

<?php include "header.php"; ?>
<br><br><br><br><br><br><br><br><br>
<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contactanos</span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Dirección</h3>
            <p>Universidad Autónoma de Aguascalientes</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>@gmail.com</p>
            <p>@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>Telefono</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <h3>Ponerse en contacto</h3>
            <div class="inputBox">
                <input type="text" placeholder="tu nombre">
                <input type="email" placeholder="tu email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="tu numero">
                <input type="text" placeholder="tu asunto">
            </div>
            <textarea placeholder="tu mensaje" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar mensaje" class="btn">
        </form>
       <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14806.125242757787!2d-102.33626167245366!3d21.914116910620464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eee23dfea56d%3A0xc2edcc935471e5fa!2sUniversidad%20Aut%C3%B3noma%20de%20Aguascalientes%2C%2020100%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1701371735263!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>

<!-- contact section ends -->





<!-- footer section starts  -->
<?php include "footer.php"; ?>
<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>

