<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Productos</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/productos.css">
</head>

<body>

<?php include "header.php"; ?>

<br>
<br>
<br>
<br>
<br>
<div class="box" data-item="featured">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="producto1.php" class="fas fa-eye"></a>
            </div>
            <div class="image">
            <a href="producto1.php"><img src="image/peli1.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3>product name</h3>
                <div class="price">
                    <div class="amount">$20.00</div>
                    <div class="cut">$25.00</div>
                    <div class="offer">20% off</div>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>(50)</span>
                </div>
            </div>
        </div>


<!-- footer section starts  -->
<?php include "footer.php"; ?>
<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>

