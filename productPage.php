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
     $id_pag = $_POST["id"];
     $sql = "SELECT id_prod, nombre_prod, precio, cantidad, descripcion, IF(descuento <> 1, descuento, NULL) AS descuento, imagen, pagina 
     FROM producto
     WHERE id_prod = $id_pag";
     $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test pagina Producto</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/productos.css">
    <style>
    .container-reviews .title-reviews .stars {
	font-size: 1.7rem;
    }
  
   .container-reviews .title-reviews .stars i {
	color: gold;
    }
  
   .container-reviews .title-reviews .stars span {
	color: gold; /* Reemplaza con tu color deseado */
    }
</style>
</head>
<body>
    <?php include "header.php"; 
    $row = $result->fetch_assoc()?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
			<div class="container-img">
				<img src='<?php echo "image/".$row["imagen"]?>' alt="imagen-producto" />
			</div>
			<div class="container-info-product">
				<div class="container-price">
					<span><?php 
                    if ($row["descuento"] !== NULL) {
                        echo "$".$row["precio"]*$row["descuento"];
                    }else echo "$".$row["precio"];
                    ?></span>
                    <span class="precio-tachado"><?php 
                    if ($row["descuento"] !== NULL) {
                        echo "$".$row["precio"];
                    }?>
                    </span>
				</div>

				<div class="container-details-product">
				<div class="container-description">
                <h3 class="nom-product"><?php echo $row["nombre_prod"]?></h3>
                <br>
					<div class="title-description">
						<h4>Descripción</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-description">
                        <?php echo $row["descripcion"]?>
					</div>
				</div>
                <br>
                <br>
                <div class="container-add-cart">
					<div class="container-quantity">
						<input
							type="number"
							placeholder="1"
							value="1"
							min="1"
							class="input-quantity"
                            id="cantidad"
						/>
						<div class="btn-increment-decrement">
							<i class="fa-solid fa-chevron-up" id="increment"></i>
							<i class="fa-solid fa-chevron-down" id="decrement"></i>
						</div>
					</div>
					<button class="btn-add-to-cart" onclick="addToCart(<?php echo $row['id_prod']; ?>, <?php echo $row['precio'] * $row['descuento']; ?>, <?php echo $row['cantidad']; ?>)">
						<i class="fa-solid fa-plus"></i>
						Añadir al carrito
					</button>
				</div>
                <br>
				<div class="container-additional-information">
					<div class="title-additional-information">
						<h4>Información importante</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-additional-information hidden">
						<p>ADVERTENCIA: Pueden producirse piezas pequeñas. No es apto para niños menores de 3 años.</p>
					</div>
				</div>

				<div class="container-reviews">
					<div class="title-reviews">
						<h4>Reseñas</h4>
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

				<div class="container-social">
					<span>Compartir</span>
					<div class="container-buttons-social">
						<a href="#"><i class="fa-solid fa-envelope"></i></a>
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest"></i></a>
					</div>
				</div>
			</div>
	</main>
    <script src="https://kit.fontawesome.com/e85f6f4e46.js" crossorigin="anonymous"></script>
    <script>

        function addToCart(id_prod, precio, cantTot) {
            // Obtén los valores necesarios
            var cantidad = document.getElementById('cantidad').value;
            if(cantidad <= cantTot && cantTot != 0){
                // Redirige a agCarrito.php con los parámetros
                window.location.href = "php/agCarrito.php?id_prod=" + id_prod + "&precio=" + precio + "&cantidad=" + cantidad;
            }else{
                alert('La cantidad solicitada supera la disponibilidad del producto.');
            }
        }

    </script>
    <?php 
    include "prodRelated.php";
    include "footer.php"; ?>
</body>
</html>