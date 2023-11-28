<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <h2>Formulario de Registro</h2>

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