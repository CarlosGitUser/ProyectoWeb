<?php
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir a la página de inicio de sesión (o cualquier otra página que desees)
header("Location: index.php");
exit();
?>