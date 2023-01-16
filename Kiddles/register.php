<?php
$connection = mysqli_connect('localhost','root','','kiddles');
error_reporting(0);

if(isset($_POST['submit'])){
   $u_name = $_POST['u_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $conpassword = $_POST['conpassword'];
   $cname = $_POST['cname'];
   $nname = $_POST['nname'];
   $cpassword = $_POST['cpassword'];
   $age = $_POST['age'];
   


   $select = " SELECT * FROM register_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';

   }else{
      if($password != $conpassword){
         $error[] = 'password not matched!';
      }else{
         $insert = "insert into register_form(u_name, email, password, cname, nname, cpassword, age) values('$u_name','$email','$password','$cname','$nname','$cpassword','$age')";
         mysqli_query($connection, $insert);
         header('location:parentslogin.php');
      }
   }
}




?>
<!-- code starts -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!--Logo-->
   <link rel="shortcut icon" type="image/png" href="images/kiddles.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>



 
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">kiddles-Care Centre For Kids</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="parentslogin.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/k-17.jpg) no-repeat">
   <h1>REGISTER</h1>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="u_name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="conpassword" required placeholder="re enter your password">
      <input type="text" name="cname" required placeholder="enter your child's name">
      <input type="text" name="nname" required placeholder="enter your child's nickname">
      <input type="password" name="cpassword" required placeholder="enter your child's password">
      <input type="number" name="age" required placeholder="enter your child's age">
      
      
      
         
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="parentslogin.php">login now</a></p>
   </form>

</div>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="parentslogin.php"> <i class="fas fa-angle-right"></i> login</a>
         
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#S"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> 111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> HAMh@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Karach, Pakistan - 74200 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100007470010994"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/hamsafa69362489"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://instagram.com/syed_aali?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://bit.ly/3uCrII8"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>HAM-H</span> | Where We Care! </div>

</section>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>
    
</body>
</html>
