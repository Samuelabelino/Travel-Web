<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">KeluargaKita.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="menumakan.php">menu makan</a>
      <a href="makanan.php">book makan</a>
      <a href="book.php">book holiday</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/slide1.jpg) no-repeat">
            <div class="content">
               <span>KeluargaKita.</span>
               <h3>"Teman sejati adalah keluarga yang bisa kamu pilih."</h3>
               <a href="package.php" class="btn">Lebih Banyak</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/slide2.jpg) no-repeat">
            <div class="content">
               <span>KeluargaKita.</span>
               <h3>"Percayalah bahwa keluarga adalah tempat terbaik untuk berbagi."</h3>
               <a href="package.php" class="btn">Lebih Banyak</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/slide3.jpg) no-repeat">
            <div class="content">
               <span>KeluargaKita.</span>
               <h3>"Keluarga adalah tempat pertama dan terakhir untuk kita berbagi.</h3>
               <a href="package.php" class="btn">Lebih Banyak</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Fitur Kita </h1>

   <div class="box-container">
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3><a href="menumakan.php">Menu Makan</a></h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3><a href="menuholiday.php">Holiday</a></h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/abouthome.jpg" alt="">
   </div>

   <div class="content">
      <h3>tentang web</h3>
      <p>Web ini  bertujuan untuk menyaring dan menyimpan data menu makan dan liburan yang diinginkan anak agar diketahui para orangtua </p>
      <a href="about.php" class="btn">Lebih banyak</a>
   </div>

</section>

<!-- home about section ends -->




<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="menumakan.php"> <i class="fas fa-angle-right"></i> menu makan</a>
         <a href="menuholiday.php"> <i class="fas fa-angle-right"></i> holiday</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 (Ayah) </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 (Ibu) </a>
         <a href="#"> <i class="fas fa-envelope"></i> ayahhebat@gmail.com </a>
         <a href="#"> <i class="fas fa-envelope"></i> ibucerdas@gmail.com </a>
      </div>

      <div class="box">
         <h3>social media</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Ayahhebat </a>
         <a href="#"> <i class="fab fa-twitter"></i> IbuCerdas </a>
         <a href="#"> <i class="fab fa-instagram"></i> KeluargaKita. </a>
         <a href="#"> <i class="fab fa-linkedin"></i> KeluargaKita. </a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>