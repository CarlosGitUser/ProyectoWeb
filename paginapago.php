<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="image/logo.png">
<title>Pagina de pago</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        text-align: center;
        padding: 25px;
        margin: 25px;
        font-size: 25px;
        background-color: #fff;
    }

    form {
        max-width: 1000px;
        max-height: 10000px;
        margin: 40px auto;
        padding: 40px;
        background-color: #edebeb;
        border-radius: 50px;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 15px;
        color: #333;
    }


    button{
        background-color: #4caf50;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    table{
        text-align: center;
    }
    td{
        text-align: center;
        width: 10px;
    }
    </style>
    </head>
    <body>
    <div>
    <form action="">
        <fieldset>
            <legend>Pago </legend>
            <table>
                <tr>
                    <td><label for="nombre">Nombre:</label></td><require>
                    <td><input id="nombre" type="text"></td>
                </tr>
                <tr>
                    <td> <label for="apellido">Apellido:</label></td><require>
                    <td><input id="apellido" type="text"></td>
                </tr>
                <tr>
                    <td><label for="numtarjeta">Num. Tarjeta: </label></td><require>
                    <td><input id="numtarjerta" type="text"></td>
                </tr>
                <tr>
                    <td><label for="fecexp">Fecha de expedicion</label></td><reauire>
                    <td><input id="fecexp" type="number"></td>
                    <br>
                </tr>
                <tr>
                    <td><label for="cv">CV:</label></td><require>
                    <td><input type="number"></td>
                </tr>
                <tr>
                    <td><label for="cupon">Cupon:</label></td>
                    <td><input id="cupon" type="text"></td><br>
                </tr>
                
                <tr>
                    <td></td>
                    <td id="button"><button>Realizar pago</button></td><require>
                </tr>
            </table>
        </fieldset>
    </form>
    </div>
</body>
</html>