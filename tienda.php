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
    <script>
        function eliminarValoresGET() {
            // Redirigir a la misma página sin los parámetros GET
            window.location.href = window.location.pathname;
        }
</script>
<style>
    body {
    margin: 0; /* Elimina el margen predeterminado del cuerpo */
}
       .filtro {
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.filtro form {
    display: flex;
    align-items: center;
    width: 100%; /* Ancho del formulario al 100% */
    border: none;
}

.filtro label {
    margin-right: 10px;
}

.filtro input,
.filtro button {
    margin-right: 10px;
}

.filtro input[type="submit"] {
    margin-right: 0; /* Evitar espacio adicional al final del botón de enviar */
}

.filtro button[type="reset"] {
    background-color: #e74c3c; /* Color de fondo */
    color: #fff; /* Color del texto */
    border: 1px solid #c0392b; /* Borde */
    padding: 8px 15px; /* Espaciado interno */
    cursor: pointer; /* Cambiar el cursor al pasar sobre el botón */
}

.filtro button[type="reset"]:hover {
    background-color: #c0392b; /* Cambiar el color de fondo al pasar sobre el botón */
}
</style>
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
    <div class="filtro">
        <form action="" method="get">
            <label for="minPrecio">Filtrar</label>
            <input type="number" placeholder="Mínimo" name="minPrecio" id="minPrecio">
            <label for="maxPrecio">hasta</label>
            <input type="number" placeholder="Máximo" name="maxPrecio" id="maxPrecio">
            <input type="submit" value="Filtrar">
            <button type="button" onclick="eliminarValoresGET()">Reset</button>
        </form>
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
            $minPrecio = isset($_GET['minPrecio']) ? floatval($_GET['minPrecio']) : 0;
            $maxPrecio = isset($_GET['maxPrecio']) ? floatval($_GET['maxPrecio']) : 0;
            
            if (isset($_GET['minPrecio']) && isset($_GET['maxPrecio'])) {
                $sql = "SELECT 
                            id_prod, nombre_prod,
                            precio,
                            IF(descuento <> 1, descuento, NULL) AS descuento,
                            imagen,
                            pagina,
                            CASE 
                                WHEN categoria = 'figura' THEN 'seller'
                                WHEN categoria = 'pelicula' THEN 'arrivals'
                                ELSE ''
                            END AS categoria_etiqueta
                        FROM producto
                        WHERE precio BETWEEN $minPrecio AND $maxPrecio";
            } else {
                $sql = "SELECT 
                            id_prod, nombre_prod,
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
            }
            
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Imprimir los datos de cada fila
                while ($row = $result->fetch_assoc()){
                    $enlaceID = 'enlaceID_' . $row["id_prod"];
                    $cant = 1;
                    if($row["descuento"] !== NULL){
                        $precio = $row["descuento"]*$row["precio"];
                    }
                    else
                        $precio = $row["precio"];

                    echo '<div class="box" data-item="'.$row["categoria_etiqueta"]. '">';
                    echo '<div class="icons">
                          <a href="php/agCarrito.php?id_prod='.$row["id_prod"].'&precio='.$precio.'&cantidad='.$cant.'&pag=tienda.php" class="fas fa-shopping-cart"></a>
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
                    <?php echo '</div>
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
<?php $conn->close();?>

</body>
</html>

