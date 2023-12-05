<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            background-color: #fff;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
    // Función para validar que las contraseñas coincidan
    function validarContraseña(event) {
        event.preventDefault(); // Evitar que el formulario se envíe normalmente

        var contraseña = document.getElementById("contraseña").value;
        var confirmarContraseña = document.getElementById("confirmarContraseña").value;
        
        if (contraseña == confirmarContraseña) {
            var formData = new FormData();
            formData.append("usuario", document.getElementById("usuario").value);
            formData.append("nombreCuenta", document.getElementById("nombreCuenta").value);
            formData.append("correo", document.getElementById("correo").value);
            formData.append("preguntaSeguridad", document.getElementById("preguntaSeguridad").value);
            formData.append("respuestaSeguridad", document.getElementById("respuestaSeguridad").value);
            formData.append("contraseña", contraseña);

            fetch('php/regBase.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // Si la inserción fue exitosa, muestra un mensaje de éxito
                    swal("Perfecto", "Ahora eres parte de la tienda", "success");
                    window.location.replace("index.php");
                } else {
                    // Si hubo un error, muestra un mensaje de error
                    swal("Error", "Hubo un problema al registrar el usuario. Por favor, inténtalo de nuevo.", "error");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                swal("Error", "Ha ocurrido un error. Por favor, inténtalo de nuevo.", "error");
            });
        } else {
            swal("Contraseña incorrecta", "Las contraseñas no coinciden", "error");
        }
    }

    // Agregar un event listener al formulario
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector('form');
        form.addEventListener('submit', validarContraseña);
    });
    </script>
</head>
<body>
    <h2>Registrarse</h2>

    <form onsubmit="validarContraseña()">
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div>
            <label for="nombreCuenta">Nombre de cuenta:</label>
            <input type="text" id="nombreCuenta" name="nombreCuenta" required>
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
        </div>
        <div>
            <label for="preguntaSeguridad">Pregunta de seguridad:</label>
            <select id="preguntaSeguridad" name="preguntaSeguridad" required>
            <option value="" disabled selected>Selecciona una pregunta</option>
            <option value="Mascota">Mascota favorita</option>
            <option value="Deporte">Deporte favorito</option>
            <!-- Otras opciones -->
            </select>
        </div>
        <div>
            <label for="respuestaSeguridad">Respuesta de seguridad:</label>
            <input type="text" id="respuestaSeguridad" name="respuestaSeguridad" required>
        </div>
        <div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>
        <div>
            <label for="confirmarContraseña">Confirmar contraseña:</label>
            <input type="password" id="confirmarContraseña" name="confirmarContraseña" required>
        </div>
        <div>
            <input type="submit" value="Registrarse">
        </div>
    </form>
</body>
</html>