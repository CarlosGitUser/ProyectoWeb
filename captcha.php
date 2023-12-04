<?php
session_start();
function generarCaptcha($length = 6) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $longitudCaracteres = strlen($caracteres);
    $captcha = '';
    for ($i = 0; $i < $length; $i++) {
        $captcha .= $caracteres[rand(0, $longitudCaracteres - 1)];
    }
    return $captcha;
}

$captchaTexto = generarCaptcha();
$_SESSION['captcha'] = $captchaTexto;

// Crear la imagen
$ancho = 150;
$alto = 50;
$imagen = imagecreatetruecolor($ancho, $alto);
$colorFondo = imagecolorallocate($imagen, 255, 255, 255);
imagefill($imagen, 0, 0, $colorFondo);
$colorTexto = imagecolorallocate($imagen, 0, 0, 0);
$anguloInclinacion = 10;

imagettftext($imagen, 25, 12, 20, 40, $colorTexto, 'ArialTh.ttf', $captchaTexto);

imagefilter($imagen, IMG_FILTER_SMOOTH, -3);
imagefilter($imagen, IMG_FILTER_SMOOTH, -3);
imagefilter($imagen, IMG_FILTER_SMOOTH, -3);

header('Content-type: image/png');
imagepng($imagen);
imagedestroy($imagen);
?>
