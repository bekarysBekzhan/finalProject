<?php

include 'config.php';

session_start();

$user_id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

   
<?php include 'header.php'; ?>
<script>
   document.title = 'About';
</script>
<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="img/photo-for-about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Because we can provide best prices and books</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/ansar.jpg" alt="">
         <p>SDU</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tulebay Ansar</h3>
      </div>

      <div class="box">
         <img src="img/dariga.jpg" alt="">
         <p>SDU</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Iskender Dariga</h3>
      </div>

      <div class="box">
         <img src="img/bekarys.png" alt="">
         <p>SDU</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bekarys Bekzhan</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/ansar.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-telegram"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Tulebay Ansar</h3>
      </div>

      <div class="box">
         <img src="img/dariga.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-telegram"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Iskender Dariga</h3>
      </div>

      <div class="box">
         <img src="img/bekarys.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-telegram"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Bekarys Bekzhan</h3>
      </div>


   </div>

</section>


<?php include 'footer.php'; ?>
