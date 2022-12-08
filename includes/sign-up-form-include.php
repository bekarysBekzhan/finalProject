<?php

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordRP = $_POST["passwordRP"];

    require_once 'server.php';
    require_once 'functrions-include.php';

    if(emptyInputSingup($name, $email, $username, $password, $passwordRP) !== false){
        header("location: ../sign-up-form.php?error=emptyInput");
        exit;
    }
    if(invalidUsername($username) !== false){
        header("location: ../sign-up-form.php?error=invalidUsername");
        exit;
    }
    if(invalidEmail($email) !== false){
        header("location: ../sign-up-form.php?error=invalidEmail");
        exit;
    }
    if(passwordMatch($password, $passwordRP) !== false){
        header("location: ../sign-up-form.php?error=passwordmatch");
        exit;
    }
    if(UsernameAlreadyExist($conn, $username, $email) !== false){
        header("location: ../sign-up-form.php?error=usernameisExist");
        exit;
    }

    createUser($conn, $name, $email, $username, $password);
}
else{
    header("location: ../sign-up-form.php");
    exit;
}