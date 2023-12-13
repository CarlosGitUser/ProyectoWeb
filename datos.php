<?php 
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    ob_start();
    $config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del pago</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
     
    <style>
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
        }

        .datos-pago {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            color: #130f40;
            font-weight: bold;
            font-size: 35px;
        }

        p {
            margin-bottom: 10px;
            font-size: 18px;

        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #130f40;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        #volver{
            display: none;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #130f40;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover, #volver:hover {
            background-color: #eb4d4b;

        }
    </style>

</head>
<body>
<script>
        Swal.fire({
    title: "Gracias por su compra :D",
    width: 600,
    padding: "3em",
    color: "#716add",
    background: "#fff url(https://sweetalert2.github.io/#examplesimages/trees.png)",
    backdrop: `
        rgba(0,0,123,0.4)
        url("https://sweetalert2.github.io/#examplesimages/nyan-cat.gif")
        left top
        no-repeat
    `
});
    </script>
 <?php 

    $text2 = $_SESSION["texto2"];
    
 ?>  
 <div class="datos-pago">
 <h2>Datos del <span style="color: #eb4d4b;">usuario</span></h2>
    <p>Nombre: <?php echo $_SESSION["nom_usuario"]?></p><br>
    <p>Correo:<?php echo $_SESSION["correo"]?></p><br>
    <p>Direccion de envio: <?php echo $_SESSION["address"]?></p><br>
    <p>Metodo de pago: <?php echo $_SESSION["pago"]?></p><br>
   <h2>Datos del <span style="color: #eb4d4b;">producto</span></h2>
    <p><?php echo $text2?></p>
    <h2>Datos de <span style="color: #eb4d4b;">pago</span></h2>
    <p>Impuesto aplicado: <?php echo $_SESSION["impuesto"] . "%"?></p>
    <p>Subtotal: <?php echo $_SESSION["subtotal"]?></p>
    <p>Total Bruto: <?php echo $_SESSION["totalFinal"]?></p>

   <a href="generarPDF.php" onclick="habilitar()">Generar PDf</a>
   <a href="index.php" id="volver">Volver al inicio</a>

   <script>
        function habilitar() {
            // Hacer visible el enlace "Volver al inicio"
            document.getElementById("volver").style.display = "block";
        }
    </script>
</body>
</html>
