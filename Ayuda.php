<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header, footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        }

        #qa-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
        text-align: center;
        font-size: 28px;
        color: red;
        font-family: 'Poppins', sans-serif;
        }

        .question {
        background-color: #fff;
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .question strong {
        display: block;
        margin-bottom: 10px;
        font-size: 18px;
        color: #333;
        }

        .question p {
        margin-bottom: 10px;
        color: #555;
        }

        form {
        margin-top: 20px;
        }

        label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        }

        input,
        textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
        }

        button {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        }

        button:hover {
        background-color: #45a049;
        }

        footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        }
        p{
            font-size: 15px;
        }
    </style>
</head>
<body>

<!-- header -->

<?php include "header.php"; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section id="preguntas">
    <div id="qa-container">
            <h1>Preguntas frecuentes</h1>
            <br>
            <br>
            <div class="question">
                <strong>Jazmin Chavez</strong>
                <p>¿Cuáles son las películas más populares en la tienda?</p>
                <p><strong></strong> Nuestras películas más populares incluyen títulos como "Aventuras en la Ciudad" y "Héroes del Espacio".</p>
            </div>

            <div class="question">
                <strong>Diego Alejandro</strong>
                <p>¿Tienen figuras de acción de superhéroes?</p>
                <p><strong></strong> Sí, contamos con una amplia selección de figuras de acción de superhéroes, incluyendo personajes icónicos como Superman, Batman y Spider-Man.</p>
            </div>

            <div class="question">
                <strong>Maximiliano Garcia</strong>
                <p>¿Cuál es la película más reciente que han añadido a su colección?</p>
                <p><strong></strong> La última incorporación a nuestra colección es "La Leyenda del Tesoro Perdido: Aventuras Marítimas".</p>
            </div>

            <div class="question">
                <strong>Emilian Guerrero</strong>
                <p>¿Ofrecen descuentos en la compra de películas y figuras de acción juntas?</p>
                <p><strong></strong> Sí, tenemos ofertas especiales para paquetes que incluyen películas y figuras de acción. Puedes consultar nuestra sección de ofertas para más detalles.</p>
            </div>

            <div class="question">
                <strong>David Durón</strong>
                <p>¿Cuál es la figura de acción más buscada actualmente?</p>
                <p><strong></strong> La figura de acción más buscada en este momento es la edición limitada de "Héroe Cósmico", inspirada en el último éxito de taquilla.</p>
            </div>

            <div class="question">
                <strong>Marta Pérez</strong>
                <p>¿Puedo realizar devoluciones si no estoy satisfecho con mi compra?</p>
                <p><strong></strong> Sí, ofrecemos una política de devolución de 30 días. Puedes consultar nuestra sección de políticas para obtener más detalles sobre cómo proceder con una devolución.</p>
            </div>

            <div class="question">
                <strong>Javier Rodríguez</strong>
                <p>¿Cuál es el proceso de envío y cuánto tiempo tarda?</p>
                <p><strong></strong> Nuestro proceso de envío toma entre 2 y 5 días hábiles, dependiendo de tu ubicación. Para obtener información detallada sobre el envío, visita nuestra página de políticas de envío.</p>
            </div>

            <div class="question">
                <strong>Ana Gómez</strong>
                <p>¿Ofrecen descuentos para clientes frecuentes?</p>
                <p><strong></strong> Sí, tenemos un programa de recompensas para clientes frecuentes. Acumulas puntos con cada compra, que luego puedes canjear por descuentos en futuras compras.</p>
            </div>

            <div class="question">
                <strong>Luis Hernández</strong>
                <p>¿Tienen servicio de atención al cliente por teléfono?</p>
                <p><strong></strong> Sí, ofrecemos servicio de atención al cliente por teléfono durante nuestro horario comercial. Puedes encontrar nuestro número de contacto en la sección de información de contacto.</p>
            </div>

            <div class="question">
                <strong>Valentina López</strong>
                <p>¿Cuáles son los métodos de pago aceptados?</p>
                <p><strong></strong> Aceptamos tarjetas de crédito, débito y PayPal como métodos de pago. Puedes revisar la sección de métodos de pago en nuestro sitio web para obtener más detalles.</p>
            </div>

            <form>
                <label for="ask" style="font-size: 18px;">Déjanos tu pregunta:</label>
                <textarea id="ask" name="ask" rows="4" required></textarea>
                <button type="submit">Enviar Pregunta</button>
            </form>
    </div>
</section>


<!-- footer section starts  -->
<?php include "footer.php"; ?>
<!-- footer section ends -->




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>

