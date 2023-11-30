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
        <div class="buttons active" data-filter="all">all</div>
        <div class="buttons" data-filter="arrivals">new arrivals</div>
        <div class="buttons" data-filter="featured">featured</div>
        <div class="buttons" data-filter="special">special offer</div>
        <div class="buttons" data-filter="seller">best seller</div>
    </div>

    <div class="box-container">

        <div class="box" data-item="featured">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/peli1.jpg" alt="">
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

        <div class="box" data-item="arrivals">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img6.jpg" alt="">
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

        <div class="box" data-item="special">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img7.jpg" alt="">
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img8.jpg" alt="">
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img9.jpg" alt="">
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

        <div class="box" data-item="featured">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img10.jpg" alt="">
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

        <div class="box" data-item="special">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img11.jpg" alt="">
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

        <div class="box" data-item="seller">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_img12.jpg" alt="">
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

    </div>

</section>

<!-- products section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="image">
        <img src="image/tranding_img.png" alt="">
    </div>

    <div class="content">
        <span>new season trending!</span>
        <h3>best summer collection</h3>
        <p>sale get up to 50% off</p>
        <a href="#" class="btn">shop now</a>
    </div>

</section>

<!-- deal section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> products </h1>

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
                    <img src="image/product_img1.jpg" alt="">
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>product name</h3>
                    <div class="price">
                        <div class="amount">$20.00</div>
                        <div class="cut">$25.00</div>
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
                    <img src="image/product_img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>product name</h3>
                    <div class="price">
                        <div class="amount">$20.00</div>
                        <div class="cut">$25.00</div>
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
                    <img src="image/product_img4.jpg" alt="">
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_img5.jpg" alt="">
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

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_img6.jpg" alt="">
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

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- reviews section starts  -->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slide">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur veniam deserunt praesentium natus quibusdam ea nam commodi.</p>
                <div class="user">
                    <img src="image/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur veniam deserunt praesentium natus quibusdam ea nam commodi.</p>
                <div class="user">
                    <img src="image/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur veniam deserunt praesentium natus quibusdam ea nam commodi.</p>
                <div class="user">
                    <img src="image/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur veniam deserunt praesentium natus quibusdam ea nam commodi.</p>
                <div class="user">
                    <img src="image/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur veniam deserunt praesentium natus quibusdam ea nam commodi.</p>
                <div class="user">
                    <img src="image/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur veniam deserunt praesentium natus quibusdam ea nam commodi.</p>
                <div class="user">
                    <img src="image/pic-6.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
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
    
    <h1 class="heading"> our <span>blogs</span></h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                    <a href="#" class="btn">read more</a>
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
            <h3>Sobre nosotros</h3>
            <p>V !</p>
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