<?php
$result = false;
function emptyInputSingup($name, $email, $username, $password, $passwordRP){
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRP)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidUsername($username){
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function passwordMatch($password,$passwordRP){
    if($password !== $passwordRP){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function UsernameAlreadyExist($conn, $username, $email){
    $sql = "SELECT * FROM user WHERE Username = ? or Email = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../sign-up-form.php?error=stmtFailed");
        exit;
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($log = mysqli_fetch_assoc($resultData)){
        return $log;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password){
    $sql = "INSERT INTO user(Name,Email,Username,Password) VALUES(?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sign-up-form.php?error=stmtFailed");
        exit;
    }
    $goodPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $goodPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
    exit;
}

function emptyInputLogin($username, $password){
    if(empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginuser($conn, $username, $password){
    $usernameisExist = UsernameAlreadyExist($conn, $username, $username);

    if($usernameisExist === false){
        header("location: ../login-form.php?error=WrongLogin");
        exit;
    }

    $goodPassword = $usernameisExist["Password"];
    $checkPassword = password_verify($password, $goodPassword);
    
    if($checkPassword === false){
        header("location: ../login-form.php?error=WrongPassword");
        exit;
    }
    else if($checkPassword === true){
        session_start();
        $_SESSION["username"] = $usernameisExist["Username"];
        $_SESSION["password"] = $usernameisExist["Password"];
        header("location: ../project.php");
        exit;
    }
}