<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'Gym';

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Conexion Fallida");
}


?>