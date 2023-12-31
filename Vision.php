<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca De</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleacerca.css">
     <!-- font awesome cdn link  -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }



        header,
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        
        h1, h2 {
            color: #333;
        }

        section.acerca {
            display: flex;
            justify-content: space-around;
            align-items: stretch;
            flex-wrap: wrap;
            margin: 20px auto;
        }

        article {
            flex: 1;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        article img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        section.autores {
            background-color: #eb4d4b;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin: 20px;
            padding-right: 10px;
            padding-left: 30px;
        }

</style>
</head>
<body>

<?php include "header.php"; ?>
<br><br><br><br><br><br><br>

<!-- Vision section starts -->
<section class="acerca">
    <article id="vision">
        <img src="image/visionPROGRA.jpg" alt="" width="700">
        <h1>Nuestra Vision</h1>
        <p>La visión de Void Zone, una empresa apasionada por el mundo del entretenimiento, se centra en proporcionar a sus 
        clientes una experiencia única y envolvente en el universo del cine y la colección.</p>
        <p>No solo buscamos vender películas y figuras coleccionables, sino también cultivar una comunidad donde los aficionados 
        puedan compartir su entusiasmo, descubrir tesoros cinematográficos y 
        encontrar piezas exclusivas para enriquecer sus colecciones
        </p>
    </article>

    <article id="mision">
        <img src="image/misionPROGRA.jpg" alt="" width="650">
        <h1>Nuestra Mision</h1>
        <p>La misión de Void Zone es proporcionar a los aficionados del cine y la colección un refugio donde sus pasiones puedan florecer
        Buscamos constantemente innovar en la forma en que los aficionados disfrutan y comparten su amor por el entretenimiento.
        </p>
        <p>Aspiramos a ser el punto de encuentro donde la pasión por el cine y la colección se fusiona con la satisfacción de encontrar tesoros únicos.
        </p>
    </article>

    <article id="objetivo">
        <img src="image/objetivosPROGRA.jpg" alt="" width="700">
        <h1>Nuestro Objetivo</h1>
        <p>El objetivo central de Void Zone es convertirse en el destino predilecto para los entusiastas del cine y la colección, 
            proporcionando una experiencia integral que va más allá de la simple adquisición de productos.
        </p>
    </article>
    
</section>

<section class="autores">
    <legend style="font-size: 35px; font-weight:bold;">Nuestro Equipo de  trabajo</legend>
    <table>
        <br>
        <br>
        <br>
        <tr>
            <td><img src="image/asly.jpeg" alt="" width="80px"></td>
            <td><p>Asly Lizbeth Salinas Morales</p></td>
            <td><img src="image/jaz.jpeg" alt="" width="80px"></td>
            <td><p>Jazmín Martínez Chavez</p></td>
            <td><img src="image/dani.jpeg" alt=""  width="80px"></td>
            <td><p>Daniel Alejandro Barbosa Ayala.</p></td>
        </tr>
        <tr>
            <td><img src="image/axel.jpeg" alt="" width="80px"></td>
            <td><p>Axel Daniel Macias Heredia</p></td>
            <td><img src="image/sebas.jpeg" alt="" width="80px"></td>
            <td><p>Sebastian Rodriguez Hernandez</p></td>
            <td><img src="image/einar.png" alt="" width="90px"></td>
            <td><p>Einar Naim Aguilar Santana</p></td>
        </tr>
        <tr>
            <td><img src="image/jesus.jpeg" alt="" width="80px"></td>
            <td><p>Jesus Ruvalcaba Lozano</p></td>
            <td><img src="image/carlos.jpeg" alt="" width="80px"></td>
            <td><p>Carlos Alberto Contreras Martinez</p></td>
            <td><p></p></td>
        </tr>
    </table>

    

</section>

<!-- footer section starts  -->
<?php include "footer.php"; ?>
<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>
