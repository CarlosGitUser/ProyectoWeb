<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer.php';
require_once 'SMTP.php';
require_once 'Exception.php';

// function generarCupon($length = 6) {
//     $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $longitudCaracteres = strlen($caracteres);
//     $cupon = '';
//     for ($i = 0; $i < $length; $i++) {
//         $cupon .= $caracteres[rand(0, $longitudCaracteres - 1)];
//     }
//     return $cupon;
// }

// $cuponfinal = generarCupon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Configuración de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
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
        $mail->addAddress($email);

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Respuesta a tu solicitud';
        $mail->Body = "Hola,<br><br>Gracias por suscribirte a nuestra pagina. Aqui tienes un cupon de descuento como cortesia: <br><br>Cupon de descuento: <br><br>PR13T0";

        // Envío del correo
        $mail->send();

        // echo 'El mensaje ha sido enviado';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Nuestro lema</h3>
            <p>¡Transforma tu mundo cinéfilo con nuestra colección de películas y figuras de acción extraordinarias!</p>
        </div>

        <div class="box">
            <h3>Categorias</h3>
            <a href="tienda.php"> <i class="fas fa-arrow-right"></i> Peliculas </a>
            <a href="tienda.php"> <i class="fas fa-arrow-right"></i> Figuras de acción </a>
        </div>

        <div class="box">
            <h3>Enlaces Rapidos</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="tienda.php"> <i class="fas fa-arrow-right"></i> Productos </a>
            <a href="Vision.php"> <i class="fas fa-arrow-right"></i> Acerca de </a>
            <a href="Contactanos.php"> <i class="fas fa-arrow-right"></i> Contacto </a>
            <a href="Ayuda.php"> <i class="fas fa-arrow-right"></i> Ayuda </a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi pedido </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi cuenta </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mi listado </a>
        </div>

        <div class="box">
            <h3>Importante</h3>
           <p>Este proyecto es solo un proyecto academico, nada de lo que se muestra en la página está a la venta.</p>
        </div>
        
        <!-- Formulario de suscripción -->
        <div class="box">
            <h3>Suscríbete</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="email" name="email" placeholder="Ingresa tu correo" required>
                <button type="submit">Suscribirse</button>
            </form>
        </div>
    </div>

    <div class="share">
        <a href="https://facebook.com/freewebsitecode" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="https://www.instagram.com/thevoidzon3/" class="fab fa-instagram"></a>
    </div>

    <div class="credit"> &copy; copyright @ 2023 by <span><a href="">sitio de películas y figuras de acción</a></span> </div>
    
</section>

<!-- footer section ends -->

</body>
</html>