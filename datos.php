<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del pago</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
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

        a:hover {
            background-color: #eb4d4b;
        }
    </style>
</head>
<body>
 <?php 
    session_start();

    $text2 = $_SESSION["texto2"];
    
 ?>  
 <div class="datos-pago">
 <h2>Datos del <span style="color: #eb4d4b;">usuario</span></h2>
    <p>Nombre: <?php echo $_SESSION["usuario"]?></p><br>
    <p>Correo:<?php echo $_SESSION["correo"]?></p><br>
    <p>Direccion de envio: <?php echo $_SESSION["address"]?></p><br>
    <p>Metodo de pago: <?php echo $_SESSION["pago"]?></p><br>
   <h2>Datos del <span style="color: #eb4d4b;">producto</span></h2>
    <p><?php echo $text2?></p>
    <h2>Datos de <span style="color: #eb4d4b;">pago</span></h2>
    <p>Impuesto aplicado: <?php echo $_SESSION["impuesto"] . "%"?></p>
    <p>Subtotal: <?php echo $_SESSION["subtotal"]?></p>
    <p>Total Bruto: <?php echo $_SESSION["totalFinal"]?></p>
 
   <a href="generarPDF.php">Generar PDf</a>
    <?php header("Locaton: generarPDF.php")?>
    </div> 
</body>
</html>