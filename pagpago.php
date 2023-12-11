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
  <div class="col-xs-6">
      <i class="fa fa fa-user"></i>
      <label for="pais">Pais:</label>
      <input list="pais" name="pais" id="pais" required>
      <select id="pais">
        <option selected>Seleccione</option>
        <option value="Afganistan">Afganistan</option>
        <option value="Albania">Albania</option>
        <option value="Alemania">Alemania</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="ArabiaSaudi">Arabia Saudi</option>
        <option value="Argelia">Argelia</option>
        <option value="Argentina" >Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaiyan">Azerbaiyan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belgica">Belgica</option>
        <option value="Belice">Belice</option>
        <option value="Benin">Benin</option>
        <option value="Bielorrusia">Bielorrusia</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Botsuana">Botsuana</option>
        <option value="Brasil">Brasil</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="BurkinaFaso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="CaboVerde">Cabo Verde</option>
        <option value="Camboya">Camboya</option>
        <option value="Camerun">Camerun</option>
        <option value="Canada">Canada</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Colombia">Colombia</option>
        <option value="Congo">Congo</option>
        <option value="CoreadelSur">Corea del Sur</option>
        <option value="CostaRica">Costa Rica</option>
        <option value="Croacia">Croacia</option>
        <option value="Cuba">Cuba</option>
        <option value="Dinamarca">Dinamarca</option>
        <option value="EAU">Emiratos Arabas Unidos</option>
        <option value="Ecuador">Ecuador</option>
        <option value="ElSalvador">El Salvador</option>
        <option value="EU">Estados Unidos</option>
        <option value="España">España</option>
        <option value="Francia">Francia</option>
        <option value="Grecia">Grecia</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Honduras">Honduras</option>
        <option value="HongKong">Hong Kong</option>
        <option value="Hungria">Hungria</option>
        <option value="Holanda">Holanda</option>
        <option value="India">India</option>
        <option value="Irak">Irak</option>
        <option value="Iran">Iran</option>
        <option value="Irlanda">Irlanda</option>
        <option value="Islandia">Isalndia</option>
        <option value="Italia">Italia</option>
        <option value="Japon">Japon</option>
        <option value="Libano">Libano</option>
        <option value="Luxemburgo">Luxemburgo</option>
        <option value="Macedonia">Macedonia</option>
        <option value="Malasia">Malasia</option>
        <option value="Marruecos">Marruecos</option>
        <option value="Mexico">Mexico</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montenegro">Montenegro</option>
        <option value="Noruega">Noruega</option>
        <option value="NuevaZelanda">Nueva Zelanda</option>
        <option value="PaisesBajos">Paises Bajos</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palestina">Palestina</option>
        <option value="Panama">Panama</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Polonia">Polonia</option>
        <option value="Portugal">Portugal</option>
        <option value="Qatar">Qatar</option>
        <option value="RepublicaDominicana">República Dominicana</option>
        <option value="Ruanda">Ruanda</option>
        <option value="Rumania">Rumania</option>
        <option value="Rusia">Rusia</option>
        <option value="SaharaOccidental">Sahara Occidental</option>
        <option value="SudAfrica">Sudáfrica</option>
        <option value="SudVietnam">Sud Vietnam</option>
        <option value="Suiza">Suiza</option>
        <option value="Tailandia">Tailandia</option>
        <option value="Taiwan">Taiwán</option>
        <option value="Tanzania">Tanzania</option>
        <option value="TimorOriental">Timor Oriental</option>
        <option value="Togo">Togo</option>
        <option value="Tonga">Tonga</option>
        <option value="TrinidadYTobago">Trinidad y Tobago</option>
        <option value="Tunez">Túnez</option>
        <option value="Uganda">Uganda</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabue">Zimbabue</option>
    </select>
    </div>
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