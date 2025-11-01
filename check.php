<?php
session_start();
$userName = $_POST['username'];
$password = $_POST['password'];

if (($userName === "mohamad" &&  $password === "MM13831383") || ($userName === "reza" && $password === "NN13881388")) {
    $_SESSION['admin'] = $userName;
    $_SESSION['password'] = $password;
    header("location:./admin.php");
} else {
    $_SESSION['error'] = "Sorry try again" ;
    header("location:./login.php");
}

