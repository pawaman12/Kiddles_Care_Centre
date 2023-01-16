<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Stories</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!--Logo-->
   <link rel="shortcut icon" type="image/png" href="images/kiddles.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

<!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
   <script src="js/script.js"></script>


</head>
<body>

<!-- header section ends -->

<div class="heading" style="background:url(images/k-12.jpg) no-repeat">
   <h1>Kiddles</h1>
</div>

<section class="story">

   <!-- <h1 class="heading-title"></h1> -->
<div class="container1">
    <h2>It's Story Time</h2> 
    <div class="row">
      <div class="col">
         <div class="feature-img">
            <img src="images/story.png" width="100%">
         </div>
      </div>
      <div class="col">
         <div class="small-img-row">
            <div class="small-img">
               <img src="images/wolf.jpg">
               <img src="images/play.png" class="play-btn" 
               onclick="playVideo('images/Little red riding hood.mp4')">
            </div>
            <p>A story of a young girl who comes across a cunning wolf on the way to her grandmother's home.</p>
         </div>
         <div class="small-img-row">
            <div class="small-img">
               <img src="images/crow.png">
               <img src="images/play.png" class="play-btn"
               onclick="playVideo('images/The thirsty crow.mp4')">
            </div>
            <p>A story of a crow who with his patience and intelligence drank water ans saved his life.</p>
         </div>
         <div class="small-img-row">
            <div class="small-img">
               <img src="images/the ant.jpg">
               <img src="images/play.png" class="play-btn"
               onclick="playVideo('images/The Ant and The Dove.mp4')">
            </div>
            <p>A story of a dove who save the life of ant's and in return also got out of trouble through ant.</p>
         </div>
         <div class="small-img-row">
            <div class="small-img">
               <img src="images/goldi.jpg">
               <img src="images/play.png" class="play-btn"
               onclick="playVideo('images/Goldilocks and Three Bears.mp4')">
            </div>
            <p> A story about a little girl who broke into the three bears' house, ate their porridge, sat in their chairs, and slept in their beds.</p>
         </div>
      </div>
    </div>
</div>
<div class="video-player" id="videoPlayer">
   <video width="100%" controls play id="myVideo">
    <source src="images/Little red riding hood.mp4" type="video/mp4">
   </video>
   <img src="images/close.png" class="close-btn" onclick="stopVideo()">
</div>
<script>
   var videoPlayer=document.getElementById("videoPlayer");
   var myVideo=document.getElementById("myVideo");

   function stopVideo(){
      videoPlayer.style.display="none";
   }

   function playVideo(file){
      myVideo.src=file;
      videoPlayer.style.display="block";
   }

</script>


   