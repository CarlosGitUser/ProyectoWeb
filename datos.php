<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del pago</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
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

   <a href="generarPDF.php" onclick="habilitar()">Generar PDf</a>
    <?php header("Locaton: generarPDF.php")?>
    <a href="index.php" style="display: none;" id="volver">Volver al inicio</a>
    <script>
        document.getElementById("volver").style.display = "block";
    </script>
</body>
</html>