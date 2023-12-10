<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de pago</title>
    <link rel="stylesheet" href="css/estilospago.css">
    <link rel="icon" type="image/x-icon" href="image/logo.png">
</head>
<body>
<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='card'>
    <input id="card" class="form-check-input" type="checkbox" value="">
    Paga $150.00 con tarjeta de crédito
  </label>
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='paypal'>
    <input id="paypal" class="form-check-input" type="checkbox" value="" >
    Paga $150.00 con PayPal
  </label>
</div>
    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <div class="row">
    <div class="col-xs-5">
      <i class="fa fa fa-user"></i>
      <label for="cardholder">Nombre</label>
      <input type="text" id="cardholder" required>
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Número de tarjeta </label>
      <input type="number" id="cardnumber" required>
    </div><!--col-xs-5-->
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <i class="fa fa-calendar"></i>
      <label for="date">Válido hasta</label><require>
      <input type="text" placeholder="MM/YY" id="date" required>
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label><require>
      <input type="number" required>
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV o CVC es el código de seguridad de la tarjeta, un número único de tres dígitos que se encuentra en el reverso de su tarjeta, separado de su número.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <footer>
    <button class="btn">Atrás</button>
    <button class="btn">Próximo paso</buton>
  </footer>
</div><!--wrapper end-->
<script>
    $('input[type="checkbox"]').on('click',function(){
var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
});
</script>
</body>
</html>