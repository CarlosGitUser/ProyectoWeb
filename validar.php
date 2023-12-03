<?php

function validarUsuarioContraseña($usuario, $contrasena) {
    // Configura tus credenciales y detalles de la base de datos
    $servidor = "localhost";
    $usuario_bd = "root";
    $contrasena_bd = "";
    $nombre_bd = "tienda";

    // Crea una conexión a la base de datos
    $conexion = new mysqli($servidor, $usuario_bd, $contrasena_bd, $nombre_bd);

    // Verifica la conexión a la base de datos
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Escapa los valores para evitar inyección de SQL (mejora la seguridad)
    $usuario = $conexion->real_escape_string($usuario);
    $contrasena = $conexion->real_escape_string($contrasena);

    $encriptada = md5($contrasena);
    
    // Realiza la consulta para verificar el usuario y la contraseña
    $consulta = "SELECT * FROM usuario WHERE cuenta = '$usuario'";
    $resultado = $conexion->query($consulta);

    // Verifica el resultado de la consulta
    if ($resultado && $resultado->num_rows == 1) {
        $fila = $resultado->fetch_assoc();
        // Verifica la contraseña y el número de intentos
        if ($fila['password'] == $encriptada && $fila['intentos'] < 3) {
            // Reiniciar el contador de intentos después de un inicio de sesión exitoso
            $conexion->query("UPDATE usuario SET intentos = 0 WHERE cuenta = '$usuario'");
            unset($_SESSION["intentos_sesion"]);
            $_SESSION["usuario"] = $fila['cuenta'];
            if (isset($_POST['remember']) && $_POST['remember'] === 'on') {
                // Establecer cookies para recordar el nombre de usuario y la contraseña (no es seguro almacenar contraseñas en texto plano)
                setcookie('usuario', $usuario, time() + (86400 * 30), "/"); // Cookie para el nombre de usuario
                setcookie('password', $contrasena, time() + (86400 * 30), "/");
                // Cookie para la contraseña (NO RECOMENDADO en producción)
                $username_cookie = $_COOKIE['usuario'];
                
                echo "Cookie 'username' existe con el valor: " . $username_cookie . "<br>";
                
            } else {
                // Si el checkbox no está marcado, eliminar las cookies previas (si existen)
                if(isset($_COOKIE['usuario'])) {
                    setcookie('usuario', '', time() - 3600, '/');
                }
                if(isset($_COOKIE['password'])) {
                    setcookie('password', '', time() - 3600, '/');
                }
            }
    
            return "<p style='color: green;'>Inicio de sesión exitoso. ¡Bienvenido!</p>";
        } else{
            
            // Incrementa el contador de intentos y actualiza la base de datos

            $conexion->query("UPDATE usuario SET intentos = intentos + 1 WHERE cuenta = '$usuario'");
            
            // Verificar el número de intentos
            if ($fila['intentos'] < 2) {
                return "<p style='color: red;'>Error en el inicio de sesión. Usuario o contraseña incorrectos. Intento " . ($fila['intentos'] + 1) . "/3</p>";
            } else {
                return "<p style='color: red;'>Has excedido el número máximo de intentos. ¿Deseas <a href='recuperar.php?usuario=" . $usuario . "'>recuperar la contraseña</a>?</p>";

            }
        }
    } else {
        // Si el usuario no existe, se podría manejar de otra manera (por ejemplo, indicar que el usuario no existe).
        return "<p style='color: red;'>Error en el inicio de sesión. Usuario o contraseña incorrectos.</p>";
    }


    // Cierra la conexión a la base de datos
    $conexion->close();
}

?>
