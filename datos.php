<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del pago</title>
</head>
<body>
 <?php 
    session_start();

    $text2 = $_SESSION["texto2"];
    
 ?>   
 <h1>Datos del usuario</h1>
    <p>Nombre: <?php echo $_SESSION["usuario"]?></p><br>
    <p>Correo:<?php echo $_SESSION["correo"]?></p><br>
    <p>Direccion de envio <?php echo $_SESSION["address"]?></p><br>
    <p>Metodo de pago: <?php echo $_SESSION["pago"]?></p><br>
   <h3>Datos del producto</h3>
    <p><?php echo $text2?></p>

    <h3>Datos de pago</h3>
    <p>Impuesto aplicado: <?php echo $_SESSION["impuesto"] . "%"?></p>
    <p>Subtotal: <?php echo $_SESSION["subtotal"]?></p>
    <p>Total Bruto: <?php echo $_SESSION["totalFinal"]?></p>

   <a href="generarPDF.php">Generar PDf</a>
    <?php header("Locaton: generarPDF.php")?>
</body>
</html>