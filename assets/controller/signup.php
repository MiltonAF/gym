<?php
require "connection.php";

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["password"];

$sql = "SELECT COUNT(*) total FROM user u WHERE u.email = '$email'";
$result = mysqli_query($conn, $sql);
$cont = $result->fetch_assoc();



if ($cont["total"] == 0) {
    $sql = "INSERT INTO user(id,name,phone,email,password) VALUES (NULL, '$name', '$phone', '$email', '$pass')";
    $save = mysqli_query($conn, $sql);

    if ($save == true) {
        $sql = "SELECT * FROM user u WHERE u.email = '$email' AND u.password = '$pass'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $username = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['user'] = $username;
            header('location: ../../index.php');
        }
    } else {
        echo ("Error al ingresar los datos" . $conn->error);
    }
} else {
    echo "<script> alert('Email ya existe'); window.location.href='../../index.php'; </script>";
}


?>