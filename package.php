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
      <a href="package.php" class="active">Tours</a>
      <a href="underrated.php" >Explore</a>
      <a href="about.php">about</a>
      <a href="book.php">Book-Now</a>
      <!-- <a href="admin.php"> <button class="sign" >Sign in</button></a> -->
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

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
            <img src="images/rajasthan1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Jaipur, Rajasthan</h3>
            <p>Discover the rich culture and history of the Pink City. Explore forts, palaces, and local markets full of handcrafted goods and traditional food</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
   <div class="image">
      <img src="images/andaman.jpg" alt="Andaman Tour">
   </div>
   <div class="content">
      <h3>Andaman Getaway</h3>
      <p>Crystal-clear waters, white beaches & coral reefs await you in this tropical escape.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
   </div>


   <div class="box">
   <div class="image">
      <img src="images/rishikesh.jpg" alt="Rishikesh Tour">
   </div>
   <div class="content">
      <h3>Rishikesh Adventure</h3>
      <p>Rafting, cliff jumping, yoga & camping by the river – thrill meets peace!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/view2_upscaled.jpeg" alt="Nainital Tour">
   </div>
   <div class="content">
      <h3>Himalayan Escape</h3>
      <p>Explore serene lakes and mountain villages in Nainital and Mukteshwar with cozy stays.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</div>


<div class="box">
   <div class="image">
      <img src="images/rajasthan1.jpg" alt="Rajasthan Tour">
   </div>
   <div class="content">
      <h3>Royal Rajasthan</h3>
      <p>Step into the royal past with forts, palaces, camel rides and desert charm!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>spain Tour Packages</h3>
            <p>Discover Spain’s rich culture, vibrant cities, and Mediterranean charm.
            From Gaudí’s wonders to flamenco nights, every moment is a fiesta!!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Boston, Canada</h3>
            <p>Vast wilderness, stunning lakes, and cosmopolitan cities define Canada’s charm.
            Explore Banff, Niagara Falls, and vibrant Toronto all in one journey.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>bali</h3>
            <p>enjoy the bali with amazing adventure.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>himalayas, Nepal</h3>
            <p>From Everest’s majesty to Kathmandu’s spiritual heart, Nepal is unforgettable.
            Ideal for trekkers, seekers, and nature lovers alike.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bangladesh</h3>
            <p>Experience the beauty of the Sundarbans, ancient mosques, and lush tea gardens.
            A hidden gem of South Asia filled with heritage and warmth.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Okaido, Japan</h3>
            <p>Explore Japan's perfect blend of ancient traditions and futuristic cities.
            Temples, cherry blossoms, sushi, and neon dreams await you!</p>
            <h2>BDT 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
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
   <div class="credit"> Designed By : - HIMANSHU SINGH , ALOK SINGH</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>