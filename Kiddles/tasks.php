<!-- task table -->

<?php

   $connection = mysqli_connect('localhost','root','','kiddles');
   error_reporting(0);
   if(isset($_POST['submit'])){
      $u_name= $_POST['u_name'];
      $task = $_POST['task'];
      $request = " insert into task_form(u_name, task) values('$u_name','$task') ";
      mysqli_query($connection, $request);
      header('location:todo.php'); 
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents To-do</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!--Logo-->
   <link rel="shortcut icon" type="image/png" href="images/kiddles.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="script.js"></script>

</head>
<body>
<section class="header">

<a href="home.php" class="logo">kiddles-Care Centre For Kids</a>

<nav class="navbar">
      <a href="about1.php">about</a>
      <a href="parentsguide.php">parents guide</a>
      <a href="kidslogin.php">kids</a>
      <a href="home.php">logout</a>
     
   </nav>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends -->

 <div class="heading" style="background:url(images/k-11.jpg) no-repeat">
    <h1>TASKS</h1>
 </div>





<section class="task">

   <h1 class="heading-title">What Tasks Should Be Displayed?</h1>

   <form action="tasks.php" method="post" class="todo-form">

      <div class="flex">
         <div class="inputBox">
            <span>Parent name:</span>
            <input type="text" placeholder="Enter your name" name="u_name">
         </div>
         <div class="inputBox">
            <span>Tasks:</span>
            <input type="text" placeholder="Enter the tasks " name="task">
         </div>
    
      <input type="submit" value="submit" class="btn" name="submit">
      

   </form>

</section>



<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="parentsguide.php"> <i class="fas fa-angle-right"></i> parents guide</a>
         <a href="kidslogin.php"> <i class="fas fa-angle-right"></i> kids</a>
         <a href="home.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="task.php"> <i class="fas fa-angle-right"></i> Add Tasks</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> HAMH@gmail.com </a>
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