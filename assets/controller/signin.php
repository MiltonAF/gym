<?php
require "connection.php";

$email = $_POST["email"];
$pass = $_POST["password"];

$sql = "SELECT COUNT(*) total FROM user u WHERE u.email = '$email'";
$result = mysqli_query($conn, $sql);
$cont = $result->fetch_assoc();


if ($cont["total"] == 1) {
    $sql = "SELECT COUNT(*) total FROM user u WHERE u.email = '$email' AND u.password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $cont = $result->fetch_assoc();

    if ($cont["total"] == 1) {
        $sql = "SELECT * FROM user u WHERE u.email = '$email' AND u.password = '$pass'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $username = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['user'] = $username;
            header('location: ../../index.php');
        }
    } else {
        echo "<script> alert('Contraseña incorrecta'); window.location.href='../../index.php'; </script>";
    }
} else {
    echo "<script> alert('Email incorrecto'); window.location.href='../../index.php'; </script>";
}


?>