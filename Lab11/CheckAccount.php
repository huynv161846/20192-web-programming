<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

if($username=='1'&&$password=='1'){
    $_SESSION['username'] = $username;
    header('Location: http://localhost:8000/lab11/Welcome.php');
    exit();
}else{
    header('Location: http://localhost:8000/lab11/login.php');
    exit();
}

?>