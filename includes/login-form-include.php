<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'server.php';
    require_once 'functrions-include.php';

    if(emptyInputLogin($username, $password) !== false){
        header("location: ../login-form.php?error=emptyInput");
        exit;
    }

    loginuser($conn, $username, $password);
}  
else{
    header("location: ../login-form.php");
    exit;
}