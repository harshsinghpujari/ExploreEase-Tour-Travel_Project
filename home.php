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
<header>
<header>
  <!-- Logo SVG inline -->
  <svg width="180" height="50" viewBox="0 0 180 50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Explore Ease logo">
    <circle cx="25" cy="25" r="20" fill="#4DB6AC" />
    <polygon points="25,10 30,25 25,40 20,25" fill="#FAFAFA" />
    <circle cx="25" cy="25" r="5" fill="#4DB6AC" />
    <text x="50" y="32" font-family="Poppins, Arial, sans-serif" font-weight="600" font-size="20" fill="#4DB6AC" letter-spacing="1">
      explore
    </text>
    <text x="130" y="32" font-family="Poppins, Arial, sans-serif" font-weight="300" font-size="20" fill="#B0BEC5" letter-spacing="1">
       ease
    </text>
  </svg>
</header>

</header>

   <a href="home.php" class="logo"><h3></h3></a>
   <nav class="navbar" style="margin-left:20px;">
      <a href="home.php" class="active">Destinations</a>
      <a href="package.php">Tours</a>
      <a href="underrated.php" >Explore</a>
      <a href="about.php">about</a>
      <a href="book.php">Book-Now</a>
      <!-- <a href="admin.php"> <button class="sign" >Sign in</button></a> -->
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/homepage3.jpg) no-repeat">
            <div class="content">
               <span style="color:white;">search, express, tour</span>
               <h3>tour arround the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/sunrise.jpeg) no-repeat">
            <div class="content">
               <span style="color:white;">search, express, tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/viewsCopy.jpeg) no-repeat">
            <div class="content">
               <span style="color:white;">search, express, tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
   <br><br><br>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<!-- <section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section> -->
<!-- services section ends -->

<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/manali1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Manali, Himachal Pradesh</h3>
            <p>Enjoy a scenic getaway to the hills of Manali. Perfect for couples, families, or solo travelers looking for peace, adventure, and nature walks.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/champawat2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Champawat, Uttarakhand</h3>
            <p>A peaceful hill town surrounded by pine and deodar forests, perfect for nature lovers and those seeking a quiet retreat. Ideal for weekend trips, especially from nearby cities.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/rajasthan1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Jaipur, Rajasthan</h3>
            <p>Discover the rich culture and history of the Pink City. Explore forts, palaces, and local markets full of handcrafted goods and traditional food</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="underrated-gems" style="
   background-image: url('images/Discover2.jpeg');
   background-size: cover;
   background-position: center;
   padding: 80px 20px 120px; /* reduced top padding, added extra bottom for balance */
   min-height: 500px;
   margin-top: 50px;
   margin-bottom: 50px;
   color: white;
   text-align: center; /* center all children by default */
">

   <h1 class="heading-title" style="
      font-size: 45px;
      background: linear-gradient(to right, #0f2027, rgba(44, 83, 100, 0.89), rgba(255, 110, 127, 0.87), #ffb347);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow:
         0 0 1px white,
         2px 2px 4px rgba(0, 0, 0, 0.4);
      margin-bottom: 10px;
   ">
      Discover Some Underrated Gems
   </h1>

   <div class="gems-content" style="margin-top: 10px;">
      <p style="font-size: 24px; color: #f0f0f0; text-shadow: 1px 1px 2px rgba(0,0,0,0.5); padding-top: 0;">
         Dive into lesser-known but beautiful travel destinations and other <strong>hidden gems across India</strong>.
      </p> 

      <a href="underrated.php" style="
         display: inline-block;
         margin-top: 120px;
         padding: 12px 24px;
         background-color: rgba(76, 175, 80, 0.9);
         color: white;
         text-decoration: none;
         font-weight: bold;
         border-radius: 5px;
         box-shadow: 0 4px 6px rgba(0,0,0,0.2);
         font-size: 20px;
      ">
         View Hidden Destinations
      </a>
   </div>

</section>




<!-- most trending destination section starts -->

<section class="home-offer home-packages" style="background-color: #f9f9f9; padding: 60px 20px;">
   <div class="container" style="
      max-width: 1200px; 
      margin: auto; 
      background-color: white; 
      border-radius: 15px; 
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08); 
      padding: 30px;
      text-align: center; /* Center heading inside container */
   ">
      <!-- Section Heading inside container -->
      <h2 style="font-size: 36px; color: #222; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 40px;">
         Most Trending Destination
      </h2>

      <!-- Flex container for image + text -->
      <div style="
         display: flex; 
         flex-wrap: wrap; 
         align-items: center; 
         justify-content: center;
         text-align: left; /* Keep text left aligned */
      ">
         <div class="offerimage" style="flex: 1 1 40%; padding: 20px;">
            <img src="images/offer.jpg" alt="Rishikesh - Most Trending Destination" style="
               width: 100%; 
               height: auto; 
               border-radius: 10px; 
               box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            ">
         </div>

         <div class="content" style="flex: 1 1 50%; padding: 20px;">
            <h3 style="font-size: 30px; color: #007B5E; margin-bottom: 10px;">Rishikesh, Uttarakhand</h3>
            <h4 style="font-size: 20px; color: rgb(0, 27, 123); margin-bottom: 20px;">📍 “Yoga Capital of the World” meets Adventure Tourism</h4>
            <p style="font-size: 16px; color: #555; line-height: 1.6;">
               Rishikesh, nestled in the foothills of the Himalayas, is India's emerging hotspot for spiritual retreats, adventure sports, and serene riverside living. Whether you're rafting down the Ganges, meditating at an ashram, or exploring vibrant cafes, Rishikesh offers something unique for every traveler.
            </p>
            <a href="rishikesh.html" class="btn" style="
               background-color: #007B5E; 
               color: white; 
               padding: 10px 20px; 
               border-radius: 5px; 
               text-decoration: none; 
               margin-top: 20px; 
               display: inline-block;">
               Explore Rishikesh
            </a>
         </div>
      </div>
   </div>
</section>
<!-- most trending destination section ends -->

<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about us image.jpeg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Welcome to ExploreEase!
We’re a team of travel lovers who built this website as a college project, driven by our shared passion for exploring the world.

Whether you're seeking adventures, peaceful escapes, or cultural journeys, we offer handpicked travel experiences to inspire your next trip.

Our goal is to make travel easy, affordable, and memorable—so you can focus on making moments that last a lifetime.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
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
   <div class="credit"> Designed By : - HIMANSHU SINGH , ALOK SINGH</span> || all rights reserved! </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>