<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="sign-login.css">
</head>

<body>
    
    <section id="header">
        <a href="#"><img src="https://cdn.shopify.com/s/files/1/0535/9153/9896/files/shwood-logo.svg?v=1622571750" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="project.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <?php
                if (isset($_SESSION["username"])) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login-form.php">Login</a></li>';
                    echo '<li><a href="sign-up-form.php">Sign up</a></li>';
                }
                ?>
                <li><a href="cart.html"><i class="fa-thin fa-bags-shopping"></i></a></li>

            </ul>
        </div>
    </section>