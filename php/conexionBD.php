<?php
$servidor='localhost';
$cuenta='id21475414_admin';
$password='123456aA;';
$bd='id21475414_tienda';

$conn = new mysqli($servidor,$cuenta,$password,$bd);

if ($conn->connect_errno){
    die('Error en la conexion');
}
?>