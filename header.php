<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Title</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
<header class="header">

   <div class="header-2" id="myElement">
      <div class="flex">
         <a href="home.php" class="logo">OurShop</a>

         <nav class="navbar">
            <a href="home.php" name ="tremble">Home</a>
            <a href="about.php" name ="tremble">About</a>
            <a href="shop.php" name ="tremble">Shop</a>
            <a href="contact.php" name ="tremble">Contact</a>
            <a href="orders.php" name ="tremble">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
         <p> New <a href="login.php" name ="tremble">Login</a > | <a href="register.php" name ="tremble">Register</a> </p>
      </div>
   </div>

</header>