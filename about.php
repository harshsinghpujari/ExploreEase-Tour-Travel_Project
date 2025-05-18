<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tour & Travel</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><svg width="180" height="50" viewBox="0 0 180 50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Explore Ease logo">
    <circle cx="25" cy="25" r="20" fill="#4DB6AC" />
    <polygon points="25,10 30,25 25,40 20,25" fill="#FAFAFA" />
    <circle cx="25" cy="25" r="5" fill="#4DB6AC" />
    <text x="50" y="32" font-family="Poppins, Arial, sans-serif" font-weight="600" font-size="20" fill="#4DB6AC" letter-spacing="1">
      explore
    </text>
    <text x="130" y="32" font-family="Poppins, Arial, sans-serif" font-weight="300" font-size="20" fill="#B0BEC5" letter-spacing="1">
       ease
    </text>
  </svg></a>

   <nav class="navbar">
      <a href="home.php">Destinations</a>
      <a href="package.php">Tours</a>
      <a href="underrated.php" >Explore</a>
      <a href="about.php" class="active">about</a>
      <a href="book.php">Book-Now</a>
      <!-- <a href="admin.php"> <button class="sign" >Sign in</button></a> -->
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->
<!-- about section starts  -->
<section class="about" style="display: flex; align-items: stretch; gap: 20px; flex-wrap: wrap; padding: 40px 20px;">

   <div class="image" style="flex: 1; display: flex; align-items: stretch;">
      <img src="images/detailedAboutus.jpg" alt="" style="width: 100%; object-fit: cover; height: 100%;">
   </div>

   <div class="content" style="flex: 1; padding: 20px;">
      <h3>More about us</h3>
      <p>
         We are a group of software engineering students, united not just by our academic journey but by our shared passion for travel and exploration. As close friends, we’ve always loved discovering new places, cultures, and hidden gems that most people overlook. Whether it’s trekking through mountains, or immersing ourselves in local experiences — we live for the thrill of the journey.
      </p>
      <p>
         <strong>ExploreEase</strong> is more than just a college project — it's a creative fusion of what we study and what we love. We built this platform to showcase India’s rich travel diversity, from the most popular destinations to the underrated corners that deserve the spotlight.
         Through this website, we aim to:
         <br>• Help travelers discover offbeat and stunning places across India.
         <br>• Inspire more people to travel with ease and confidence.<br>
       We believe travel isn’t just about ticking off places — it’s about stories, experiences, and memories. And ExploreEase is our way of making those experiences easier to find and plan.
         Join us on this journey, and let’s explore the unexplored — together.
      </p>

      <div class="icons-container" style="margin-top: 20px;">
         <div class="icons" style="margin-bottom: 10px;">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>
<!-- about section ends -->

<!-- about section ends -->

<!-- reviews section starts  -->



<!-- reviews section ends -->
<!-- footer section starts  -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-83683**** </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-92209**** </a>
         <a href="#"> <i class="fas fa-envelope"></i> exploreEase789@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> New DELHI , INDIA </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> Designed By : - HIMANSHU SINGH , ALOK SINGH</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>