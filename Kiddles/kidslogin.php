<?php

@include 'config.php';
error_reporting(0);
session_start();

if(isset($_POST['submit'])){

   $nname = $_POST['nname'];
   $cpassword = $_POST['cpassword'];
   

   $select = " SELECT * FROM register_form WHERE nname = '$nname' && cpassword = '$cpassword' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
         header('location:kids.php');

   }}else{
      $error[] = '';
   };
   //header('location:home1.php');


?>



<!-- html part started -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!--Logo-->
   <link rel="shortcut icon" type="image/png" href="images/kiddles.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">kiddles-Care Centre For Kids</a>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/k-17.jpg) no-repeat">
   <h1>Hi Kids uwu</h1>
</div>

<!-- login section -->

<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <input type="string" name="nname" required placeholder="enter your nickname">
      <input type="password" name="cpassword" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      
   </form>

</div>

<!-- footer section -->

<section class="footer">

   <div class="credit"> created by <span>HAM-H</span> | Where We Care! </div>

</section>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>
    
</body>
</html>
