<?php
session_start();
$userName = $_POST['username'];
$password = $_POST['password'];

if (($userName === "mohamad" &&  $password === "m1234") || ($userName === "reza" && $password === "r1234")) {
    $_SESSION['admin'] = $userName;
    $_SESSION['password'] = $password;
    header("location:./admin.php");
} else {
    $_SESSION['error'] = "Sorry try again" ;
    header("location:./login.php");
}

