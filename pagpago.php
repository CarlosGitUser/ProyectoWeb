<?php 
  session_start();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de pago</title>
    <link rel="stylesheet" href="css/estilospago.css">
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <style>
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
</head>
<body>
<form action="<?php echo htmlspecialchars("PHP_SELF")?>" method="post">
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
                        <input id="paypal" class="form-check-input" type="checkbox" value="">
                        Pagaon  $150.00 cPayPal
                    </label>
                </div>
            </div>
            <div class="col-xs-5">
                <div id="oxxo">
                    <div id="oxxo-content">
                        <img src="image/oxxologo.png">
                        <label class="form-check-label" for='oxxo'>
                            <input id="oxxo" class="form-check-input" type="checkbox" value="">
                            Paga $150.00 con OXXO
                        </label>
                    </div>
                </div>
            </div>
        </div>

  
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
      <select id="pais">
        <option selected required>Seleccione</option required>
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
    <a href="index.php" class="btn btn-dark">volver</a>
    <a href="generarPDF.php" class="btn btn-light">Finalizar compra</a>
  </footer>
  
</div><!--wrapper end-->
</form>
<script>
    $('input[type="checkbox"]').on('click',function(){
var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
});
</script>

<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once 'PHPMailer.php';
  require_once 'SMTP.php';
  require_once 'Exception.php';
 
  
  $nombre = $_POST["nombre"];
  $address = $_POST["address"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $codigo = $_POST["codigo"];
  $country = $_POST["country"];

  if($_SERVER["PHP_SELF"]){
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }
    
    $id_usr = $_SESSION["id_usuario"];
    // Consulta para obtener todos los productos en el carrito para el usuario
    $sql = "SELECT id_prod, cantidad, monto FROM carrito WHERE id_usr = $id_usr";
    $result = $conn->query($sql);

    $carrito = array(); // Variable para almacenar la información del carrito
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Almacena los detalles del producto en el array $carrito
            $id_producto = $row['id_prod'];
            $sql_producto = "SELECT nombre_prod, imagen FROM producto WHERE id_prod = $id_producto";
            $result_producto = $conn->query($sql_producto);
            
            if ($result_producto->num_rows > 0){ 
                $row_producto = $result_producto->fetch_assoc();
                $carrito[] = array(
                  'nombre' => $row_producto["nombre_prod"],
                  'cantidad' => $row["cantidad"],
                  'monto' => $row["monto"],
                  'imagen' => $row_producto["imagen"]
              );
              }
      }
    } else {
        echo "El carrito está vacío";
    }
    try {
        // Configuración del servidor SMTP
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Dokkabaelol69@outlook.com';
        $mail->Password = 'Dokkabae69';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Desactivar verificación del certificado SSL
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Configuración del remitente y destinatario
        $mail->setFrom('Dokkabaelol69@outlook.com');
        $mail->addAddress($correo);

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Recibo de compra';
        $body = "Hola,<br><br>Gracias por tu compra. Aquí están los detalles de tu carrito:<br><br>";

        $subtotal = 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          if (isset($_POST['total'])) {
              $total = $_POST['total'];
          }        
        }
        if (!empty($carrito)) {
            $body .= "<ul>";
            foreach ($carrito as $producto) {

              $body .= '<li>Producto: ' . $producto['nombre'] . ', Cantidad: ' . $producto['cantidad'] . ', Monto: ' . $producto['monto'] . '</li> <img src="image/'.$producto['imagen'].'">';                
              $subtotal += $producto['monto'];
            }
            $body .= "</ul>";
            $body .= "<br>Subtotal: $" . $subtotal;
            $body .= '<li><strong>Total:</strong> $' . $total . '</li>';
          } else {
             $body .= "El carrito está vacío.";
          }
      
      $mail->Body = $body;

        // Envío del correo
        $mail->send();

        //configuracion del pdf
         
          

        if (!empty($carrito)) {
          $text = 'Recibo de compras de ' . $nombre;
          $text .= "
          Datos del usuario: 
          Correo: $correo
          Telefono: $telefono

          ";
          $text .="Datos de los productos
          ";
          foreach ($carrito as $producto) {
              $text .= 'Producto: ' . $producto['nombre'] . ', Cantidad: ' . $producto['cantidad'] . ', Monto: ' . $producto['monto'];
              $text .="
              ";
              //' <img src="image/'.$producto['imagen'];
              $subtotal += $producto['monto'];
          }
          $text .= "
          
          Subtotal: $" . $subtotal;
      
          // Codificar el texto para que pueda ser enviado por URL
      
      
          // Redirigir a la página crearPDF.php con el contenido de $text
          
      } else {
          $text .= "El carrito está vacío.";
      }
      
     
      $_SESSION["texto"] = $text;
       

     
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
    }
    exit();
  }
?>

</body>
</html>