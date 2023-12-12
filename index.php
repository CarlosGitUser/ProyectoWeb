<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 70%;
        max-width: 600px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
    }

    .coupon {
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        margin-top: 20px;
    }

    .coupon h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .coupon p {
        color: #555;
        font-size: 16px;
    }

    .coupon code {
        background-color: #e0e0e0;
        padding: 5px 10px;
        border-radius: 5px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 16px;
        color: #333;
    }
    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-weight: normal;
    font-family: 'Segoe UI';

    font-size: 12px;
    text-align: center;
    color: #fff;
}



.center {
    width: 100%;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
}

.coupon_cont-center{
    width: 400px;
    height: 800px;

    background-color: #505050;
    box-shadow: 0px 10px 10px #00000030;
    border-radius: 15px;

    display: flex;
    justify-content: center;
    align-items: center;
}

h2 {
    font-size: 20px;
    font-weight: bold;
    color: #333; }
h3{
    font-size: 40px;
    font-weight: bold;
    color: #7e57c2;
}

span{
    font-size: 20px;
    font-weight: bold;
    color: #c25757;
}
.copiar_coupon{
    width: 360px;
    height: 200px;
    text-align: center;
    background-color: #e6d8ff;
    box-shadow: 0px 5px 5px #00000030;
    border-radius: 10px;

    margin-bottom: 50px;
    overflow: hidden;
}

.canjear_coupon {
    width: 360px;
    height: 200px;

    background-color: #e6d8ff;
    box-shadow: 0px 5px 5px #00000030;
    border-radius: 10px;

    margin-bottom: 50px;
    overflow: hidden;
}

.txt_cont{
    width: 100%;
    height: 40px;

    display: flex;
    justify-content: center;
    align-items: center;
}
.price_cont{
    width: 100%;
    height: 80px;

    display: flex;
    justify-content: center;
    align-items: center;
}
.action_cont{
    width: 100%;
    height: 80px;

    display: flex;
    justify-content: center;
    align-items: center;
}

input{
    width: 160px;
    height: 40px;

    outline: none;
    border: none;
    border-radius: 5px 0px 0px 5px;

    color: #333;

    font-size: 18px;
    font-weight: bold;
}
button{
    width: 160px;
    height: 40px;

    background-color: #333;
    border-radius: 0px 5px 5px 0px;
    border: none;

    font-size: 18px;
    font-weight: bold;

    cursor: pointer;
}
    </style>

</head>
<body>
    
<?php include "header.php"; ?>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(image/ba1.jpg) no-repeat">
                <div class="content">
                    <span>Hasta 50% de rebaja</span>
                    <h3>Peliculas</h3>
                    <a href="tienda.php" class="btn">Comprar ahora</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/banne2.jpg) no-repeat">
                <div class="content">
                    <span>Hasta 50% de rebaja</span>
                    <h3>Figuras de acción</h3>
                    <a href="tienda.php" class="btn">Comprar ahora</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/banne3.jpg) no-repeat">
                <div class="content">
                    <span>Hasta 50% de rebaja</span>
                    <h3>Compra<br>ya!</h3>
                    <a href="tienda.php" class="btn">Comprar ahora</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->
<button style="position: fixed;
        right: 20px;
        bottom: 20px;
        background-color: red;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        z-index: 2;" onclick="openModal()">Abrir cupón</button>

<!-- Ventana modal -->
<div id="myModal" class="modal">
    <!-- Contenido de la ventana modal -->
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
            <div class="coupon_cont">

                <div class="copiar_coupon">
                    <div class="txt_cont"><h2>Cupon de descuento</h2></div>
                    <div class="price_cont"><h3 style="font-size: 20px;">El envío va por nuestra cuenta</h3> </div>

                    <div class="action_cont">
                        <input id="input1" type="text" value="54ldqwer23">
                        <button id="btn1" onclick="copyCoupon()">copiar</button>
                    </div>
                </div>

               
            </div>
    </div>
</div>

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
        <?php 
            require "php/conexionBD.php";
            $sql = "SELECT id_prod, nombre_prod, precio, IF(descuento <> 1, descuento, NULL) AS descuento, imagen, pagina FROM producto LIMIT 12";

            $result = $conn->query($sql);
            $type = ["arrivals","featured", "special", "seller"];
            if ($result->num_rows > 0) {
                // Imprimir los datos de cada fila
                while ($row = $result->fetch_assoc()){
                    $enlaceID = 'enlaceID_' . $row["id_prod"];
                    $n = rand(0,3);
                    echo '<div class="box" data-item="'.$type[$n].'">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-search"></a>';
                   ?>
                        <a href="#" class="fas fa-eye" id="<?php echo $enlaceID; ?>" data-id="<?php echo $row["id_prod"] ?>"></a>
                     <script>
                            document.getElementById('<?php echo $enlaceID; ?>').addEventListener('click', function (e) {
                            e.preventDefault(); // Evita el comportamiento predeterminado del enlace

                            var id = this.getAttribute('data-id'); // Obtiene el id desde el atributo data-id
                            var url = 'productPage.php';

                            // Crea un formulario dinámicamente
                            var form = document.createElement('form');
                            form.method = 'post';
                            form.action = url;

                            // Crea un input oculto para enviar el id
                            var input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'id';
                            input.value = id;

                            // Agrega el input al formulario
                            form.appendChild(input);

                            // Agrega el formulario al cuerpo del documento y lo envía
                            document.body.appendChild(form);
                            form.submit();
                        });
                    </script>
                   <?php
                    echo '</div>';
                    echo '<div class="image">';
                    echo '<a href="'.$row["pagina"].'"><img src="image/'.$row["imagen"].'" alt=""></a>';
                    echo '</div>
                        <div class="content">
                            <h3>'.$row["nombre_prod"].'</h3>
                            <div class="price">
                                <div class="amount">$'. $row["precio"] .'</div>
                                <div class="cut">';
                                if ($row["descuento"] !== NULL) {
                                    echo "$".$row["descuento"]*$row["precio"];
                                }
                                echo '</div>';
                                //<div class="offer">20% off</div>
                            echo '</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>';
                }
            }
        ?>
    </div>

</section>

<!-- Aqui terminan los productos  -->

<!-- deal section starts  -->

<section class="deal">

    <div class="image">
        <img src="image/tranding.png" alt="">
    </div>

    <div class="content">
        <span>Tendencias para nuevas temporadas!</span>
        <h3>La mejor colección de invierno</h3>
        <p>Rebajas hasta el 50% de descuento</p>
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
                        <h3>Juan Padilla</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Increíble servicio en esta tienda en línea. La variedad de productos es asombrosa, y la página web es fácil de navegar. Mi pedido llegó en perfectas condiciones y en tiempo récord. ¡Gracias por la excelente atención</p>
                <div class="user">
                    <img src="image/pic-2.png" alt="">
                    <div class="info">
                        <h3>Ana Pau</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Esta tienda virtual es genial. Encontré ediciones exclusivas y difíciles de conseguir de películas y figuras de acción. El sistema de compra fue fluido,  la entrega fue rápida y el servicio al cliente es de primera. ¡Muy satisfecho con mi experiencia!</p>
                <div class="user">
                    <img src="image/pic-3.png" alt="">
                    <div class="info">
                        <h3>Rodrigo olivares</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Hoy recibí mi pedido de esta tienda en línea y estoy emocionado. Las figuras de acción son de alta calidad, y las películas son exactamente lo que esperaba. La atención al cliente también fue excelente. ¡Recomiendo esta tienda a todos los aficionados</p>
                <div class="user">
                    <img src="image/pic-4.png" alt="">
                    <div class="info">
                        <h3>valeria Rodriguez</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>La tienda en línea tiene una selección increíble. Encontré productos que no había visto en ningún otro lugar. La información detallada de cada artículo hizo que mi elección fuera más fácil. ¡Definitivamente compraré aquí de nuevo!</p>
                <div class="user">
                    <img src="image/pic-5.png" alt="">
                    <div class="info">
                        <h3>Ruben Davila</h3>
                        <span>happy client</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Mi experiencia de compra en esta tienda en línea fue perfecta. Encontré productos exclusivos, el proceso de pago fue seguro, y mi pedido llegó en excelentes condiciones. ¡Recomendaré esta tienda a mis amigos!</p>
                <div class="user">
                    <img src="image/pic-6.png" alt="">
                    <div class="info">
                        <h3>Adriana Dominguez</h3>
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

<?php include "footer.php"; ?>

<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target === modal) {
            closeModal();
        }
    }
</script>
<script>
function copyCoupon() {
    let copyTxt = document.getElementById("input1");
    let btnTxt = document.getElementById("btn1");

    copyTxt.select();
    copyTxt.setSelectionRange(0,99999);

    navigator.clipboard.writeText(copyTxt.value);

    if (btnTxt.innerHTML === "copiar") {
        btnTxt.innerHTML = "copiado";
    }
}


</script>
</body>
</html>