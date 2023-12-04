<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Productos</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
<?php include "header.php"; ?>

<!-- body -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="products" id="products">

    <h1 class="heading"> Nuestros <span>Productos</span> </h1>

    <div class="filter-buttons">
        <div class="buttons active" data-filter="all">Todo</div>
        <div class="buttons" data-filter="arrivals">Peliculas</div>
        <div class="buttons" data-filter="seller">Figuras de Acción</div>
    </div>

       <!-- Aqui inician los productos-->

    <div class="box-container">
      <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tienda";
        
            // Crear una conexión
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            $sql = "SELECT 
                nombre_prod,
                precio,
                IF(descuento <> 1, descuento, NULL) AS descuento,
                imagen,
                pagina,
                CASE 
                    WHEN categoria = 'figura' THEN 'seller'
                    WHEN categoria = 'pelicula' THEN 'arrivals'
                    ELSE ''
                END AS categoria_etiqueta
            FROM producto";
    
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Imprimir los datos de cada fila
                while ($row = $result->fetch_assoc()){
                    echo '<div class="box" data-item="'.$row["categoria_etiqueta"]. '">';
                    echo '<div class="icons">
                          <a href="#" class="fas fa-shopping-cart"></a>
                          <a href="#" class="fas fa-heart"></a>
                          <a href="#" class="fas fa-search"></a>';
                    echo '<a href="'.$row["pagina"].'" class="fas fa-eye"></a>';
                    echo '</div>
                    <div class="image">';
                       echo '<img src="image/'.$row["imagen"].'" alt="">
                    </div>
                    <div class="content">
                        <h3>'.$row["nombre_prod"].'</h3>
                        <div class="price">
                                <div class="amount">';
                                if ($row["descuento"] !== NULL) {
                                    echo "$".$row["descuento"]*$row["precio"];
                                }else echo "$".$row["precio"];
                                echo '</div>
                                <div class="cut">';
                                if($row["descuento"] !== NULL){
                                    echo "$".$row["precio"];
                                }
                                echo '</div>';
                                echo '<div class="offer">';
                                if ($row["descuento"] !== NULL) {
                                    echo 100 - ($row["descuento"]*100)."%";
                                }
                                echo '</div>';
                            echo '</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(50)</span>
                        </div>
                    </div>
                </div>';
                }
            }
        ?>
    </div>

</section>
<!-- fin  de los productos -->


<!-- footer section starts  -->
<?php include "footer.php"; ?>
<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>

