<?php

function validarUsuarioContraseña($usuario, $contrasena) {
    // Configura tus credenciales y detalles de la base de datos
    $servidor = "localhost";
    $usuario_bd = "root";
    $contrasena_bd = "";
    $nombre_bd = "tienda";

    // Crea una conexión a la base de datos
    $conexion = new mysqli($servidor, $usuario_bd, $contrasena_bd, $nombre_bd);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $captchaIngresado = $_POST['captcha'];
        echo "<p style='color: #f4f4f4;'>".$captchaIngresado."</p>";
        if (isset($_SESSION['captcha']) && $_SESSION['captcha'] === $captchaIngresado) {
            // Aquí hace algo si queremos
        
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
                    $_SESSION["id_usuario"]= $fila['id_usr'];
                    if (isset($_POST['remember']) && $_POST['remember'] === 'on') {
                        // Establecer cookies para recordar el nombre de usuario y la contraseña (no es seguro almacenar contraseñas en texto plano)
                        setcookie('usuario', $usuario, time() + (86400 * 30), "/"); // Cookie para el nombre de usuario
                        setcookie('contrasena', $contrasena, time() + (86400 * 30), "/"); // Cookie para el nombre de usuario
                        // Cookie para la contraseña (NO RECOMENDADO en producción)
                    } else {
                        // Si el checkbox no está marcado, eliminar las cookies previas (si existen)
                        if(isset($_COOKIE['usuario'])) {
                            setcookie('usuario', '', time() - 3600, '/');
                        }
                        if(isset($_COOKIE['contrasena'])) {
                            setcookie('contrasena', '', time() - 3600, '/');
                        }
                    }
                    
                    header("Location:index.php");
                } else{
                    
                    // Incrementa el contador de intentos y actualiza la base de datos

                    $conexion->query("UPDATE usuario SET intentos = intentos + 1 WHERE cuenta = '$usuario'");
                    
                    // Verificar el número de intentos
                    if ($fila['intentos'] < 2) {
                        return array("result" => "error_attempt", "attempts" => $fila['intentos']);
                    } else {
                        return array("result" => "error_max_attempts", "usuario" => $usuario);

                    }
                }
            } else {
                // Si el usuario no existe, se podría manejar de otra manera (por ejemplo, indicar que el usuario no existe).
                return array("result" => "error_user_not_exist");
            }
    } else {
        return array("result" => "error_captcha");
        // Aquí regresamos a la página anterior
    }
}

    // Cierra la conexión a la base de datos
    $conexion->close();
}

?>
