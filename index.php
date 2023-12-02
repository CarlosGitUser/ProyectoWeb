<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

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
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->
<h1></h1>
<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(image/ba1.jpg) no-repeat">
                <div class="content">
                    <span>Hasta 50% de rebaja</span>
                    <h3>Peliculas</h3>
                    <a href="#" class="btn">Comprar ahora</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/banne2.jpg) no-repeat">
                <div class="content">
                    <span>Hasta 50% de rebaja</span>
                    <h3>Figuras de acción</h3>
                    <a href="#" class="btn">Comprar ahora</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/banne3.jpg) no-repeat">
                <div class="content">
                    <span>Hasta 50% de rebaja</span>
                    <h3>Compra<br>ya!</h3>
                    <a href="#" class="btn">Comprar ahora</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="image/ima1.jpg" alt="">
        <div class="content">
            <span>Oferta especial</span>
            <h3>Hasta 50%</h3>
            <a href="#" class="btn">Comprar ahora</a>
        </div>
    </div>
    
    <div class="banner">
        <img src="image/ima2.jpg" alt="">
        <div class="content">
            <span>Oferta especial</span>
            <h3>Hasta 50%</h3>
            <a href="#" class="btn">Comprar ahora</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Productos <span>Exclusivos</span> </h1>

    <div class="filter-buttons">
        <div class="buttons active" data-filter="all">Todo</div>
        <div class="buttons" data-filter="arrivals">Recien llegado</div>
        <div class="buttons" data-filter="featured">Destacados</div>
        <div class="buttons" data-filter="special">Oferta especial</div>
        <div class="buttons" data-filter="seller">Mejor vendido</div>
    </div>

 <!-- Aqui inician los productos-->

    <div class="box-container">

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
                <h3>Mad Max: Fury Road [4K Ultra HD + Blu-ray + Digital HD]</h3>
                <div class="price">
                    <div class="amount">$450.00</div>
                    <div class="cut">$530.00</div>
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

        <div class="box" data-item="special">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/figu1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Star Wars Kylo Ren Starkiller Figura de Accion Excluisva</h3>
                <div class="price">
                    <div class="amount">$428.00</div>
                    <div class="cut">$857.00</div>
                    <div class="offer">50% off</div>
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Blade Runner 2049 (BD) [Blu-ray]</h3>
                <div class="price">
                    <div class="amount">$643.00</div>
                    <div class="cut">$728.00</div>
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

        <div class="box" data-item="arrivals">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/figu9.jpg" alt="">
            </div>
            <div class="content">
                <h3>PIGGY - Figura de acción Robby Series 2 de 3.5" (incluye artículos DLC)</h3>
                <div class="price">
                    <div class="amount">$758.00</div>
                    <div class="cut">$824.00</div>
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

        <div class="box" data-item="featured">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/figu8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Banpresto Dragon Ball Legends Collab Super Saiyan Gogeta Figura</h3>
                <div class="price">
                    <div class="amount">$1,287.00</div>
                    <div class="cut">$1,326.00</div>
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

        <div class="box" data-item="arrivals">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Blade Runner (1982) (4K UHD) [Blu-ray]</h3>
                <div class="price">
                    <div class="amount">$919.00</div>
                    <div class="cut">$924.00</div>
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

        <div class="box" data-item="special">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli4.jpg" alt="">
            </div>
            <div class="content">
                <h3>2001: A SPACE ODYSSEY (4K UHDBD) [Blu-ray]</h3>
                <div class="price">
                    <div class="amount">$603.00</div>
                    <div class="cut">$610.00</div>
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/figu2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Square Enix Marvel Universe Variant Play Arts - Figura de acción de Kai - Wolverine</h3>
                <div class="price">
                    <div class="amount">$3,768.00</div>
                    <div class="cut">$3,773.00</div>
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/figu3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Marvel Avengers Titan Hero Series - Figura de Thor de 30 cm con Accesorio</h3>
                <div class="price">
                    <div class="amount">$149.00</div>
                    <div class="cut">$153.00</div>
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

        <div class="box" data-item="featured">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli5.jpg" alt="">
            </div>
            <div class="content">
                <h3>The Lost Boys [Blu-ray]</h3>
                <div class="price">
                    <div class="amount">$579.00</div>
                    <div class="cut">$583.00</div>
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

        <div class="box" data-item="special">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Oppenheimer [Blu-Ray 4K]+ [2Blu-Ray](Keine deutsche Version)</h3>
                <div class="price">
                    <div class="amount">$959.00</div>
                    <div class="cut">$963.00</div>
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli7.jpg" alt="">
            </div>
            <div class="content">
                <h3>Spider-Man: Across The Spider-Verse - UHD/BD Combo + Digital [Blu-ray]</h3>
                <div class="price">
                    <div class="amount">$519.00</div>
                    <div class="cut">$524.00</div>
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

    </div>

</section>

<!-- Aqui terminan los productos  -->

<!-- deal section starts  -->

<section class="deal">

    <div class="image">
        <img src="image/tranding.png" alt="">
    </div>

    <div class="content">
        <span>tendencias para nuevas temporadas!</span>
        <h3>La mejor colección de invierno</h3>
        <p>rebajas hasta el 50% de descuento</p>
        <a href="#" class="btn">Comprar ahora</a>
    </div>

</section>

<!-- deal section ends -->

<!-- aqui de nuevo inicia otra seccion de productos  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Productos</span> Destacados </h1>

    <div class="swiper featured-slider">
        
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                <img src="image/peli6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Oppenheimer [Blu-Ray 4K]+ [2Blu-Ray](Keine deutsche Version)</h3>
                <div class="price">
                    <div class="amount">$959.00</div>
                    <div class="cut">$963.00</div>
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/figu1.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Star Wars Kylo Ren Starkiller Figura de Accion Excluisva</h3>
                    <div class="price">
                        <div class="amount">$428.00</div>
                        <div class="cut">$857.00</div>
                        <div class="offer">50% de descuento</div>
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/figu2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Square Enix Marvel Universe Variant Play Arts - Figura De Acción De Kai - Wolverine</h3>
                    <div class="price">
                        <div class="amount">$3,768.00</div>
                        <div class="cut">$3,773.00</div>
                        <div class="offer">20% de descuento</div>
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/figu6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Marvel Legends Series: X Men 60 Aniversario - Villanos Figuras De Accion 6 Pulgadas</h3>
                    <div class="price">
                        <div class="amount">$3599.00</div>
                        <div class="cut">$3603.00</div>
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/peli14.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Nun II (Blu-ray + Digital)</h3>
                    <div class="price">
                        <div class="amount">$644.00</div>
                        <div class="cut">$648.00</div>
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/peli21.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Yo Antes de Ti [Blu-ray]</h3>
                    <div class="price">
                        <div class="amount">$437.00</div>
                        <div class="cut">$442.00</div>
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

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- Aqui termina otra seccion de productos -->

<!-- reviews section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Opinión <span>del cliente</span> </h1>

    <div class="swiper review-slide">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>¡Esta tienda en línea es un hallazgo! La variedad de películas y figuras de acción es increíble, y el proceso de compra fue sencillo. El seguimiento del pedido también fue excelente. ¡Muy feliz con mi experiencia de compra</p>
                <div class="user">
                    <img src="image/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Increíble servicio en esta tienda en línea. La variedad de productos es asombrosa, y la página web es fácil de navegar. Mi pedido llegó en perfectas condiciones y en tiempo récord. ¡Gracias por la excelente atención</p>
                <div class="user">
                    <img src="image/pic-2.png" alt="">
                    <div class="info">
                        <h3>amy paulette</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Esta tienda virtual es genial. Encontré ediciones exclusivas y difíciles de conseguir de películas y figuras de acción. El sistema de compra fue fluido,  la entrega fue rápida y el servicio al cliente es de primera. ¡Muy satisfecho con mi experiencia!</p>
                <div class="user">
                    <img src="image/pic-3.png" alt="">
                    <div class="info">
                        <h3>teo olivares</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Hoy recibí mi pedido de esta tienda en línea y estoy emocionado. Las figuras de acción son de alta calidad, y las películas son exactamente lo que esperaba. La atención al cliente también fue excelente. ¡Recomiendo esta tienda a todos los aficionados</p>
                <div class="user">
                    <img src="image/pic-4.png" alt="">
                    <div class="info">
                        <h3>valeria dondiego</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>La tienda en línea tiene una selección increíble. Encontré productos que no había visto en ningún otro lugar. La información detallada de cada artículo hizo que mi elección fuera más fácil. ¡Definitivamente compraré aquí de nuevo!</p>
                <div class="user">
                    <img src="image/pic-5.png" alt="">
                    <div class="info">
                        <h3>Paul davila</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Mi experiencia de compra en esta tienda en línea fue perfecta. Encontré productos exclusivos, el proceso de pago fue seguro, y mi pedido llegó en excelentes condiciones. ¡Recomendaré esta tienda a mis amigos!</p>
                <div class="user">
                    <img src="image/pic-6.png" alt="">
                    <div class="info">
                        <h3>Hanna Yao</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->



<!-- blogs  section starts  -->

<section class="blogs" id="blogs">
    
    <h1 class="heading"> Nuestros <span>blogs</span></h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tooys</h3>
                    <p>Visitanos y conoce todas las categorias que tenemos en figuras de acción.</p>
                    <a href="https://tooys.mx/coleccion/figuras-de-accion.html" class="btn">Leer más</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Soy de Cine</h3>
                    <p>Nos gusta hablar de peliculas de todo tipo de genero.</p>
                    <a href="https://soydecine.com/" class="btn">Leer más</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Toogeek</h3>
                    <p>Tenemos figuras de acción de todo los diferentes tamaños y categorias.</p>
                    <a href="https://toogeek.co/productos/juguetes/figuras-de-accion/" class="btn">Leer más</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Historia del Cine.es</h3>
                    <p>Conoce más sobre la historia del cine y cada una de las películas que hay.</p>
                    <a href="https://historiadelcine.es/noticias-cine/" class="btn">Leer más</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>El palacio de hierro</h3>
                    <p>Nos encanta coleccionar diferentes figuras de acción.</p>
                    <a href="https://www.elpalaciodehierro.com/juguetes/figuras-de-accion/" class="btn">Leer más</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- blogs  section ends -->

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