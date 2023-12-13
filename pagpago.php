<?php 
  session_start();
  include 'header.php';

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
      
    </style>
</head>
<body>
  <br><br><br><br><br><br><br><br>
<form action="<?php echo htmlspecialchars("PHP_SELF")?>" method="post">
<div id="wrapper">

  
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
        
        
        <option value="Argentina" >Argentina</option>
        
        
        <option value="España">España</option>
        
        
        <option value="Mexico">Mexico</option>
       
       
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
  $pago = $_POST["payment-method"];
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

        $total = 0;
        $subtotal = 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          if (isset($_POST['total'])) {
              $total = $_POST['total'];
          }        
        }
        if (!empty($carrito)) {
            $body .= "<ul>";
            foreach ($carrito as $producto) {

              $body .= '<li>Producto: ' . $producto['nombre'] . ', Cantidad: ' . $producto['cantidad'] . ', Monto: ' . $producto['monto'] . '</li>';
              $subtotal += $producto['monto'];
            }
            if ($country === "Mexico") {
              $impuesto = 0.16;
            } elseif ($country === "Argentina") {
              $impuesto = 0.30;
            } elseif ($country === "España") {
              $impuesto = 0.21;
            } else {
              $impuesto = 1;
            }

            $envio = ($subtotal < 1000) ? 100 : 0;
            $impuestos = ($subtotal + $envio) * $impuesto;
            $total += $impuestos;
            $body .= '<li>Envio: $' . $envio . '</li>';
            $body .= '<li>Impuesto: $' . $impuestos . '</li>';
            $body .= "</ul>";
            $body .= "<br>Subtotal: $" . $subtotal;
            $body .= '<li><strong>Total:</strong> $' . $total . '</li>';
          } else {
             $body .= "El carrito está vacío.";
          }
          $totF = ($impuesto+1)*($subtotal+$envio);
          $totF = ($impuesto+1)*($subtotal+$envio);
      $mail->Body = $body;

        // Envío del correo
        $mail->send();

        //configuracion del pdf
         
         $text = ""; 
        $sub = 0;
        if (!empty($carrito)) {
          $text = "Recibo de compras de " . $nombre;
          $text .= "
          Datos del usuario: 
          Correo: $correo
          Telefono: $telefono
          Direccion: $address
          Metodo de pago: $pago

          ";
          if($_SESSION["total"]>1000){
            $text .= "Envio GRATIS
            ";
          }else $text .= "Gastos de envio: 100
          ";
        
          $text .= "Detalles de la compra
          ";
          foreach ($carrito as $producto) {
              $text .= "Producto: " . $producto["nombre"] . ", Cantidad: " . $producto["cantidad"] . ", Monto: " . $producto["monto"];
              $text .="
              ";
              //' <img src="image/'.$producto['imagen'];
              $sub += $producto["monto"];
          }
          
            $tot = $_SESSION["total"];
          
          $text .= "
          
          

        
          Subtotal: $" . $sub;
          $text .= "
          Impuesto aplicable: ".$impuesto."%
          Total:  $".$totF;
         
         
          
      } else {
          $text .= "El carrito está vacío.";
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