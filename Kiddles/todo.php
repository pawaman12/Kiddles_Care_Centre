<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kids</title>

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

<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">kiddles-Care Centre For Kids</a>

   <nav class="navbar">
      <a href="home.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<section class="kids">
  <video autoplay loop muted plays-inline class="video-1">
         <source src="images/to do vid.mp4" type="video/mp4"> 
         </video>
  <!-- <?php

$connect = mysqli_connect("localhost", "root", "", "testing");

?>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
          <h3 align="center">Get Multiple Checkbox values and Insert into Mysql in PHP</h3><br />
          <h4>Please Select Programming Language</h4><br />  
          <form method="post">
           <p><input type="checkbox" name="language[]" value="C" /> C</p>
           <p><input type="checkbox" name="language[]" value="C++" /> C++</p>
           <p><input type="checkbox" name="language[]" value="C#" /> C#</p>
           <p><input type="checkbox" name="language[]" value="Java" /> Java</p>
           <p><input type="checkbox" name="language[]" value="PHP" /> PHP</p>
           <p><input type="submit" name="submit" class="btn btn-info" value="Submit" /></p>
          </form>
          <?php
          if(isset($_POST["submit"]))
          {
           $for_query = '';
           if(!empty($_POST["language"]))
           {
            foreach($_POST["language"] as $language)
            {
             $for_query .= $language . ', ';
            }
            $for_query = substr($for_query, 0, -2);
            $query = "INSERT INTO tbl_language (name) VALUES ('$for_query')";
            if(mysqli_query($connect, $query))
            {
             echo '<h3>You have select following language</h3>';
                echo '<label class="text-success">' . $for_query . '</label>';
            }
           }
           else
           {
            echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
           }
          }
          ?>
     <br />
         </div>  
      </body>

  


</section>










<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>