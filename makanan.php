<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

   <a href="home.php" class="logo">KeluargaKita</a>

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

<div class="heading" style="background:url(images/menu4.jpg) no-repeat">
   <h1>Makan apa yaa?</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Pilih Makanan Anda</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nama :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>mau makan apa ? :</span>
            <input type="text" placeholder="place you want to visit" name="food">
         </div>
         <div class="inputBox">
            <span>berapa banyak ? :</span>
            <input type="number" placeholder="number of guests" name="many">
         </div>
         <div class="inputBox">
            <span>alamat? :</span>
            <input type="text" placeholder="masukkan alamat" name="address">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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