
<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        body{
    font-family: monospace;
    overflow-x: hidden;
    font-synthesis: 15px;
}
a{
    text-decoration: none;
}
.container{
    width: 1200px;
    margin: auto;
    max-width: 90%;
    transition: transform 1s;
}
header img{
    width: 60px;
}
header{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
header .iconCart{
    position: relative;
    z-index: 1;
}
header .totalQuantity{
    position: absolute;
    top: 0;
    right: 0;
    font-size: x-large;
    background-color: #b31010;
    width: 40px;
    height: 40px;
    color: #fff;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    transform: translateX(20px);
}
.listProduct{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.listProduct .item img{
    width: 100%;
        height: 430px;
    object-fit: cover;
}
.listProduct .item{
    position: relative;
}
.listProduct .item h2{
    font-weight: 700;
    font-size: x-large;
}
.listProduct .item .price{
    font-size: x-large;
}

.listProduct .item button{
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: #e6572c;
    color: #fff;
    width: 50%;
    border: none;
    padding: 20px 30px;
    box-shadow: 0 10px 50px #000;
    cursor: pointer;
    transform: translateX(-50%) translateY(100px);
    opacity: 0;
}
.listProduct .item:hover button{
    transition:  0.5s;
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}
.cart{
    color: #fff;
    position: fixed;
    width: 400px;
    max-width: 80vw;
    height: 100vh;
    background-color: #0E0F11;
    top: 0px;
    right: -100%;
    display: grid;
    grid-template-rows: 50px 1fr 50px;
    gap: 20px;
    transition: right 1s;
}

.cart .buttons .checkout{
    background-color: #E8BC0E;
    color: #000;
}
.cart h2{
    color: #E8BC0E;
    padding: 20px;
    height: 30px;
    margin: 0;
}


.cart .listCart .item{
    display: grid;
    grid-template-columns: 50px 1fr 70px;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
    
}
.cart .listCart img{
    width: 100%;
    height: 70px;
    object-fit: cover;
    border-radius: 10px;
}
.cart .listCart .item .name{
    font-weight: bold;
}
.cart .listCart .item .quantity{
    display: flex;
    justify-content: end;
    align-items: center;
}
.cart .listCart .item .quantity span{
    display: block;
    width: 50px;
    text-align: center;
}

.cart .listCart{
    padding: 20px;
    overflow: auto;
}
.cart .listCart::-webkit-scrollbar{
    width: 0;
}

.cart .buttons{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    text-align: center;
}
.cart .buttons div{
    background-color: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    cursor: pointer;
}
.cart .buttons a{
    color: #fff;
    text-decoration: none;
}
.checkoutLayout{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 50px;
    padding: 20px;
}
.checkoutLayout .right{
    background-color: #5358B3;
    border-radius: 20px;
    padding: 40px;
    color: #fff;
}
.checkoutLayout .right .form{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    border-bottom: 1px solid #7a7fe2;
    padding-bottom: 20px;
}
.checkoutLayout .form h1,
.checkoutLayout .form .group:nth-child(-n+3){
    grid-column-start: 1;
    grid-column-end: 3;
}
.checkoutLayout .form input, 
.checkoutLayout .form select
{
    width: 100%;
    padding: 10px 20px;
    box-sizing: border-box;
    border-radius: 20px;
    margin-top: 10px;
    border:none;
    background-color: #6a6fc9;
    color: #fff;
}
.checkoutLayout .right .return .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
.checkoutLayout .right .return .row div:nth-child(2){
    font-weight: bold;
    font-size: x-large;
}
.buttonCheckout{
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 20px;
    background-color: #49D8B9;
    margin-top: 20px;
    font-weight: bold;
    color: #fff;


}

#btn2{
    background-color: #4caf50;
    color: white;
    padding: 12px 20px;
    border: none;
}

.returnCart h1{
    border-top: 1px solid #eee;  
    padding: 20px 0;
}
.returnCart .list .item img{
    height: 80px;
}
.returnCart .list .item{
    display: grid;
    grid-template-columns: 80px 1fr  50px 80px;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
    padding: 0 10px;
    box-shadow: 0 10px 20px #5555;
    border-radius: 20px;
}
.returnCart .list .item .name,
.returnCart .list .item .returnPrice{
    font-size: large;
    font-weight: bold;
}
.row {
    display: flex;
    flex-wrap: wrap; /* Permite que los elementos se envuelvan en una nueva línea si no hay suficiente espacio */
    justify-content: space-around; /* Alinea los elementos a lo largo del eje principal con espacio alrededor */
}
#cards img, #oxxo img {
    max-width: 100%;
    display: flex;
    align-items: center; /* Centra verticalmente los elementos hijos */
    justify-content: center; /* Centra horizontalmente los elementos hijos */
    height: 100%;
    margin: 0 auto;
}

#cards{
    display: flex;
    align-items: center; /* Centra verticalmente los elementos hijos */
    justify-content: center; /* Centra horizontalmente los elementos hijos */
    height: 0%;
    max-width: 50%;
    height: auto;
    display: block;
    margin: 0 auto;
}
#oxxo {
    display: flex;
    align-items: center; /* Centra verticalmente los elementos hijos */
    justify-content: center; /* Centra horizontalmente los elementos hijos */
    height: 100%; /* Asegura que el contenedor ocupe toda la altura disponible */
}

#oxxo-content {
    text-align: center; /* Centra horizontalmente el texto */
}

#oxxo img {
    max-width: 50%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.col-xs-5 {
    max-width: 30%;
      }
      
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
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
<div class="container">
    <div class="checkoutLayout">
        <div class="returnCart">
        <a href="index.php">Seguir comprando</a>
            <h1>Lista de productos en el carrito</h1>
<?php

// Verificar si el usuario tiene una sesión iniciada
if (isset($_SESSION['id_usuario'])) {
    // Obtener el ID del usuario de la sesión
    $id_usuario = $_SESSION['id_usuario'];

    // Establecer la conexión con la base de datos (cambiar estos valores por los correspondientes a tu base de datos)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $total = 0;
    // Consulta SQL para obtener los productos en el carrito del usuario específico
    $sql = "SELECT id_prod, cantidad, monto FROM carrito WHERE id_usr = $id_usuario";

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
        // Mostrar los productos en el carrito
        
        $total = 0; // Inicializar la variable para almacenar el total de los montos
        while ($row = $result->fetch_assoc()) {
            $id_producto = $row["id_prod"];
            
            // Consulta adicional para obtener el nombre, precio y descuento del producto basado en el ID del producto en el carrito
            $sql_producto = "SELECT nombre_prod, precio, descuento, imagen FROM producto WHERE id_prod = $id_producto";
            $result_producto = $conn->query($sql_producto);
            
            if ($result_producto->num_rows > 0) {
                $row_producto = $result_producto->fetch_assoc();
                $nombre_producto = $row_producto["nombre_prod"];
                $precio_unitario = $row_producto["precio"];
                $descuento = $row_producto["descuento"];
                
                
                $precio_descuento = $precio_unitario * ($descuento); // Precio con descuento aplicado
                ?>
                    <div class="list">

                        <div class="item">
                            <img src="<?php echo "image/". $row_producto['imagen']; ?>">
                            <div class="info">
                                <div class="name"> <?php echo $nombre_producto; ?> </div>
                                <div class="price">$<?php echo $precio_unitario; ?> c/u</div>
                            </div>
                            <div class="quantity"><input type='number' min='1' value='<?php echo $row["cantidad"]; ?>' data-id='<?php echo $row["id_prod"]; ?>' onchange='actualizarCantidad(this, <?php echo $precio_descuento; ?>)'></div>
                            <div class="returnPrice"><?php echo "<p id='precio_".$row["id_prod"]."'>$".$row["monto"]."</p>"; ?> <span><a href="php/eliminarCarrito.php?id_prod= <?php echo $row["id_prod"]; ?> " class="fas fa-trash"></a></span></div>


                        </div>

                        </div>
                <?php
                
                // Calcular el precio con descuento
                $total += $row["monto"]; // Sumar el monto del producto al total
            }
        }
        } else {
        echo "No se encontraron productos en el carrito para el usuario $id_usuario";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si el usuario no tiene una sesión iniciada, redirigirlo a la página de inicio de sesión
    // header("Location: login.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '<script>
    document.getElementById("cupon").style.display = "none";
    canjearBtn.innerHTML = "canjeado";
    </script>';
}else{
    ?>
        <form id="miFormulario" style="display: none;" method="post">
            <input type="hidden" name="valor" id="valorInput">
        </form>
        <label for="">Ingrese su cupon</label><input type="text" id="cupon">
        <button id="btn2" onclick="canjearCoupon()">canjear</button>
        <?php
    
}
?>      
</div>


        <form action="pagpago.php" method="post">
        <div class="right">
            <h1>Verificar</h1>
            <div class="form">
                <div class="group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" name="nombre" id="name" >
                </div>

                <div class="group">
                    <label for="address">Direccion</label>
                    <input type="text" name="address" id="address" >
                </div>
    
                <div class="group">
                    <label for="correo">Direccion email</label>
                    <input type="email" name="correo" id="correo" >
                </div>
    
                <div class="group">
                    <label for="telefono">Num. Telefonico</label>
                    <input type="text" name="telefono" id="telefon" >
                </div>
                
                <div class="group">
                    <label for="codigo">Codigo Postal</label>
                    <input type="text" name="codigo" id="codigo" >
                </div>
                
                <div class="group">
                    <label for="country">País</label>
                    <select name="country" id="country" onchange="cargarCiudades()">
                        <option value="" >seleccionar...</option>

                        <option value="Argentina" >Argentina</option>
                       
                        <option value="España">España</option>
                       
                        <option value="Mexico">Mexico</option>
                        
                    </select>
                </div>
    
                <div class="group">
                    <label for="city">Ciudad</label>
                    <select name="city" id="city">
                        <option value="">Choose..</option>
                        <option value="">London</option>

                    </select>
                </div>

            </div>
            <div class="row">
            <div class="col-xs-5">
    <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
    </div><!--#cards end-->
    <div class="form-check">
        <label class="form-check-label" for='card-visa'>
            <input id="card-visa" class="form-check-input" type="radio" name="payment-method" value="visa">
            Paga $150.00 con tarjeta de crédito (Visa)
        </label>
    </div>
</div><!--col-xs-5 end-->

<div class="col-xs-5">
    <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
    </div><!--#cards end-->
    <div class="form-check">
        <label class="form-check-label" for='paypal'>
            <input id="paypal" class="form-check-input" type="radio" name="payment-method" value="paypal">
            Paga $150.00 con PayPal
        </label>
    </div>
</div>

<div class="col-xs-5">
    <div id="oxxo">
        <div id="oxxo-content">
            <img src="image/oxxologo.png">
            <label class="form-check-label" for='oxxo'>
                <input id="oxxo" class="form-check-input" type="radio" name="payment-method" value="oxxo">
                Paga $150.00 con OXXO
            </label>
        </div>
    </div>
</div>
            <div class="return">
                <div class="row">
                    <?php 
                    if($total > 1000){
                        ?>
                        <div>Envio completamente GRATIS!!</div>
                        <div class="totalQuantity">$0</div>
                        <?php
                    }else{
                        ?>
                        <div>Costo de Envio</div>
                        <div class="totalQuantity">$100</div>
                        <?php
                    }
                    ?>
                </div>
                <div class="row">
                    <div>Impuesto</div>
                    <div class="totalTax" id="impuesto"></div>
                    
                </div>
                <div class="row">
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Procesar datos recibidos por POST
                        $valor = $_POST['valor'];
                        $_SESSION["total"] = $valor;
                        ?>
                            <div>Precio Total</div>
                            <div class="totalPrice" id="total">$<?php echo $valor; ?></div>
                        <?php
                    }elseif($total > 1000){
                        ?>
                            <div>Precio Total</div>
                            <div class="totalPrice" id="total">$<?php echo $total; ?></div>
                            <?php
                            $_SESSION["total"] = $total;
                    }else{
                        ?>
                            <div>Precio Total</div>
                            <div class="totalPrice" id="total">$<?php echo $total + 100; ?></div>
                            <?php
                            $_SESSION["total"] = $total + 100;
                    }
                    ?>
                    <input type="hidden" name="total" value="<?php echo $_SESSION["total"]; ?>">
                    <!-- <input type="submit" value="Pagar"> -->
                </div>
            </div>
            <input type="submit" value="proceder al pago" class="btn btn-dark">
            </div>
            
            </form>
            
    </div>
</div>


  <?php include "footer.php"; ?>
<script>
    function actualizarCantidad(input, descu) {
        var nuevaCantidad = input.value;
        var idProducto = input.getAttribute('data-id');
        // Calcular el nuevo precio con el descuento aplicado
        var nuevoPrecio = nuevaCantidad * descu;

        // Actualizar el precio en la interfaz
        document.getElementById('precio_' + idProducto).innerText = '$' + nuevoPrecio.toFixed(2);
        
        var rows = document.querySelectorAll("input[data-id]");
        var total = 0;
        rows.forEach(function(row) {
            var id = row.getAttribute('data-id');
            var cantidad = parseInt(row.value);
            var precioDescuento = parseFloat(document.getElementById('precio_' + id).innerText.replace('$', ''));
            total += precioDescuento;
        });
        // Mostrar el total actualizado en la interfaz
        document.getElementById('total').innerText = '$' + total.toFixed(2);

        // Realizar la solicitud AJAX para enviar los datos al servidor
        var xhr = new XMLHttpRequest();
        var url = 'php/actualizarCarrito.php'; // El archivo PHP que manejará la actualización
        var params = 'id_producto=' + idProducto + '&nueva_cantidad=' + nuevaCantidad + '&nuevo_precio=' + nuevoPrecio;

        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // La solicitud fue exitosa, puedes realizar alguna acción si es necesario
                    console.log('Datos actualizados en la base de datos.');
                } else {
                    // Ocurrió un error al procesar la solicitud
                    console.error('Error al actualizar datos en la base de datos.');
                }
            }
        };

        xhr.send(params);

    }
    let iconCart = document.querySelector('.iconCart');
let cart = document.querySelector('.cart');
let container = document.querySelector('.container');
let close = document.querySelector('.close');

iconCart.addEventListener('click', function(){
    if(cart.style.right == '-100%'){
        cart.style.right = '0';
        container.style.transform = 'translateX(-400px)';
    }else{
        cart.style.right = '-100%';
        container.style.transform = 'translateX(0)';
    }
})
close.addEventListener('click', function (){
    cart.style.right = '-100%';
    container.style.transform = 'translateX(0)';
})


let products = null;
// get data from file json
fetch('product.json')
    .then(response => response.json())
    .then(data => {
        products = data;
        addDataToHTML();
})

//show datas product in list 
function addDataToHTML(){
    // remove datas default from HTML
    let listProductHTML = document.querySelector('.listProduct');
    listProductHTML.innerHTML = '';

    // add new datas
    if(products != null) // if has data
    {
        products.forEach(product => {
            let newProduct = document.createElement('div');
            newProduct.classList.add('item');
            newProduct.innerHTML = 
            `<img src="${product.image}" alt="">
            <h2>${product.name}</h2>
            <div class="price">$${product.price}</div>
            <button onclick="addCart(${product.id})">Add To Cart</button>`;

            listProductHTML.appendChild(newProduct);

        });
    }
}
//use cookie so the cart doesn't get lost on refresh page

function cargarCiudades() {
        // Obtén el elemento del país y la ciudad
        var selectPais = document.getElementById('country');
        var selectCiudad = document.getElementById('city');

        // Obtén el valor seleccionado del país
        var paisSeleccionado = selectPais.options[selectPais.selectedIndex].value;
        var total = document.getElementById('total');
        var contenido = total.innerText;
        var matches = contenido.match(/\d+\.\d+/);
        if (matches) {
            var numeroExtraido = parseFloat(matches[0]);
        }
    
        // Limpia las opciones actuales de la ciudad
        selectCiudad.innerHTML = '';

        // Añade nuevas opciones de ciudad según el país seleccionado
        switch (paisSeleccionado) {
            case 'Argentina':
                agregarCiudad(selectCiudad, 'Buenos Aires');
                agregarCiudad(selectCiudad, 'Córdoba');
                impuesto = 0.30;
                document.getElementById('impuesto').innerText = '$' + (numeroExtraido * impuesto).toFixed(2);
                document.getElementById('total').innerText = '$' + (numeroExtraido * (impuesto + 1)).toFixed(2);
                // Agrega más ciudades según sea necesario
                break;
            case 'España':
                agregarCiudad(selectCiudad, 'Madrid');
                agregarCiudad(selectCiudad, 'Barcelona');
                impuesto = 0.21;
                document.getElementById('impuesto').innerText = '$' + (numeroExtraido * impuesto).toFixed(2);
                document.getElementById('total').innerText = '$' + (numeroExtraido * (impuesto + 1)).toFixed(2);
                // Agrega más ciudades según sea necesario
                break;
            case 'Mexico':
                agregarCiudad(selectCiudad, 'Ciudad de México');
                agregarCiudad(selectCiudad, 'Guadalajara');
                agregarCiudad(selectCiudad, 'Aguascalientes');
                impuesto = 0.16; 
                document.getElementById('impuesto').innerText = '$' + (numeroExtraido * impuesto).toFixed(2);
                document.getElementById('total').innerText = '$' + (numeroExtraido * (impuesto + 1)).toFixed(2);
                // Agrega más ciudades según sea necesario
                break;
        }
    }

    function agregarCiudad(select, ciudad) {
        var opcion = document.createElement('option');
        opcion.value = ciudad;
        opcion.text = ciudad;
        select.add(opcion);
    }

    function canjearCoupon() {
    let canjearTxt = document.getElementById("cupon").value;
    let canjearBtn = document.getElementById("btn2");

    var total = document.getElementById('total');
    var contenido = total.innerText;
    var matches = contenido.match(/\d+\.\d+/);
    if (matches) {
    var numeroExtraido = parseFloat(matches[0]);
    }

    if (canjearTxt === "54ldqwer23") {
        document.getElementById('total').innerText = '$' + (numeroExtraido - 100).toFixed(2);
        // Valor numérico en JavaScript
        var valorNumerico = numeroExtraido - 100;
        document.getElementById('valorInput').value = valorNumerico.toFixed(2);
        
        // Enviar el formulario usando JavaScript
        document.getElementById('miFormulario').action = window.location.href;
        document.getElementById('miFormulario').submit();
    } else if (canjearTxt === "VoidZon3") {
        // Verificar si el producto está en el carrito antes de aplicar el descuento
        var productoId = 2; // Reemplaza con el ID del producto específico
        verificarCarrito(productoId, function(enCarrito) {
            if (enCarrito) {
                // Aplicar descuento solo si el cupón es válido y el producto está en el carrito
                document.getElementById('total').innerText = '$' + (numeroExtraido - 100).toFixed(2);
                // Valor numérico en JavaScript
                var valorNumerico = numeroExtraido - 100;
                document.getElementById('valorInput').value = valorNumerico.toFixed(2);
                
                // Enviar el formulario usando JavaScript
                document.getElementById('miFormulario').action = window.location.href;
                document.getElementById('miFormulario').submit();
            } else {
                // Mostrar mensaje de cupón no válido si el producto no está en el carrito
                discount.innerHTML = '<h3 style="font-size: 15px; width: 300px;">El cupón no es válido o el producto no está en el carrito 🥲</h3>';
            }
        });
    } else if(canjearTxt === "PR1370"){
        document.getElementById('total').innerText = '$' + (numeroExtraido - 200).toFixed(2);
        // Valor numérico en JavaScript
        var valorNumerico = numeroExtraido - 200;
        document.getElementById('valorInput').value = valorNumerico.toFixed(2);
        
        // Enviar el formulario usando JavaScript
        document.getElementById('miFormulario').action = window.location.href;
        document.getElementById('miFormulario').submit();
    }
}

// Función para verificar si un producto está en el carrito
function verificarCarrito(productoId, callback) {
    // Enviar una solicitud AJAX al script PHP para verificar el carrito
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            callback(response.enCarrito);
        }
    };
    xhr.open("GET", "php/verificarCupon.php?productoId=" + productoId, true);
    xhr.send();
}
    
let listCart = [];
function checkCart(){
    var cookieValue = document.cookie
    .split('; ')
    .find(row => row.startsWith('listCart='));
    if(cookieValue){
        listCart = JSON.parse(cookieValue.split('=')[1]);
    }else{
        listCart = [];
    }
}
checkCart();
function addCart($idProduct){
    let productsCopy = JSON.parse(JSON.stringify(products));
    //// If this product is not in the cart
    if(!listCart[$idProduct]) 
    {
        listCart[$idProduct] = productsCopy.filter(product => product.id == $idProduct)[0];
        listCart[$idProduct].quantity = 1;
    }else{
        //If this product is already in the cart.
        //I just increased the quantity
        listCart[$idProduct].quantity++;
    }
    document.cookie = "listCart=" + JSON.stringify(listCart) + "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";

    addCartToHTML();
}
addCartToHTML();
function addCartToHTML(){
    // clear data default
    let listCartHTML = document.querySelector('.listCart');
    listCartHTML.innerHTML = '';

    let totalHTML = document.querySelector('.totalQuantity');
    let totalQuantity = 0;
    // if has product in Cart
    if(listCart){
        listCart.forEach(product => {
            if(product){
                let newCart = document.createElement('div');
                newCart.classList.add('item');
                newCart.innerHTML = 
                    `<img src="${product.image}">
                    <div class="content">
                        <div class="name">${product.name}</div>
                        <div class="price">$${product.price} / 1 product</div>
                    </div>
                    <div class="quantity">
                        <button onclick="changeQuantity(${product.id}, '-')">-</button>
                        <span class="value">${product.quantity}</span>
                        <button onclick="changeQuantity(${product.id}, '+')">+</button>
                    </div>`;
                listCartHTML.appendChild(newCart);
                totalQuantity = totalQuantity + product.quantity;
            }
        })
    }
    totalHTML.innerText = totalQuantity;
}
function changeQuantity($idProduct, $type){
    switch ($type) {
        case '+':
            listCart[$idProduct].quantity++;
            break;
        case '-':
            listCart[$idProduct].quantity--;

            // if quantity <= 0 then remove product in cart
            if(listCart[$idProduct].quantity <= 0){
                delete listCart[$idProduct];
            }
            break;
    
        default:
            break;
    }
    // save new data in cookie
    document.cookie = "listCart=" + JSON.stringify(listCart) + "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
    // reload html view cart
    addCartToHTML();
}
</script>
  <script>
    let listCart = [];
function checkCart(){
        var cookieValue = document.cookie
        .split('; ')
        .find(row => row.startsWith('listCart='));
        if(cookieValue){
            listCart = JSON.parse(cookieValue.split('=')[1]);
        }
}
checkCart();
addCartToHTML();
function addCartToHTML(){
    // clear data default
    let listCartHTML = document.querySelector('.returnCart .list');
    listCartHTML.innerHTML = '';

    let totalQuantityHTML = document.querySelector('.totalQuantity');
    let totalPriceHTML = document.querySelector('.totalPrice');
    let totalQuantity = 0;
    let totalPrice = 0;
    // if has product in Cart
    if(listCart){
        listCart.forEach(product => {
            if(product){
                let newCart = document.createElement('div');
                newCart.classList.add('item');
                newCart.innerHTML = 
                    `<img src="${product.image}">
                    <div class="info">
                        <div class="name">${product.name}</div>
                        <div class="price">$${product.price}/1 product</div>
                    </div>
                    <div class="quantity">${product.quantity}</div>
                    <div class="returnPrice">$${product.price * product.quantity}</div>`;
                listCartHTML.appendChild(newCart);
                totalQuantity = totalQuantity + product.quantity;
                totalPrice = totalPrice + (product.price * product.quantity);
            }
        })
    }
    totalQuantityHTML.innerText = totalQuantity;
    totalPriceHTML.innerText = '$' + totalPrice;
}
</script>
</body>
</html>