<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body>
<?php include "header.php"; ?>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="checkoutLayout">

        
        <div class="returnCart">
            <a href="index.php">Seguir comprando</a>
            <h1>Lista de productos en el carrito</h1>
            <div class="list">

                <div class="item">
                    <img src="images/1.webp">
                    <div class="info">
                        <div class="name">PRODUCTO 1</div>
                        <div class="price">$22/1 producto</div>
                    </div>
                    <div class="quantity">5</div>
                    <div class="returnPrice">$433.3</div>
                </div>

            </div>
        </div>


        <div class="right">
            <h1>Verificar</h1>

            <div class="form">
                <div class="group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name">
                </div>
    
                <div class="group">
                    <label for="phone">Numero de telefono</label>
                    <input type="text" name="phone" id="phone">
                </div>
    
                <div class="group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address" id="address">
                </div>
    
                <div class="group">
                    <label for="country">País</label>
                    <select name="country" id="country">
                        <option value="">Escoje..</option>
                        <option value="">Kingdom</option>
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
            <div class="return">
                <div class="row">
                    <div>Cantidad Total</div>
                    <div class="totalQuantity">70</div>
                </div>
                <div class="row">
                    <div>Precio Total</div>
                    <div class="totalPrice">$900</div>
                </div>
            </div>
            <button class="buttonCheckout">Verificar</button>
            </div>
    </div>
</div>

  <?php include "footer.php"; ?>
<script>
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