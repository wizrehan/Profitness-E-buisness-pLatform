<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Fitness | Register</title>
     
    <link href="image/logo.png" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img width="100" height="100" src="image/logo.png"> </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="service.php">Service</a>
        <a href="#blog">Blog</a>
        <a href="about.php">About</a>
        <a href="#categories">Categories</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    
   <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/Dumbbell.jpg" alt="">
            <div class="content">
                <h3>Dumbbell</h3>
                <span class="price">Tk 450/-</span>
                <span class="quantity">qty : 2</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/Outtobe Hand Gripper.jpg" alt="">
            <div class="content">
                <h3>Outtobe Hand Gripper</h3>
                <span class="price">Tk 350/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : Tk 800/- </div>
        <a href="#" class="btn">checkout</a>
    </div>  
</header>
<!-- Login section end -->
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">


<!-- SIGN UP Start -->

<section class="categories" id="categories">
<div class="wrapper">
  <div class="title">
    Create New
  </div>
  <div class="social_media">
    <div class="item">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="item">
      <i class="fab fa-twitter"></i>
    </div>
    <div class="item">
      <i class="fab fa-instagram"></i>
    </div>
  </div>
  
  <div class="form">
  <form action="connect.php" method="post">
    <div class="input_field">
      <input type="text" placeholder="Name" class="input" id= "name" name="name">
      <i class="fas fa-user"></i>
    </div>
	<div class="input_field">
      <input type="number" placeholder="Phone Nunber" class="input" id= "phone" name="phone">
      <i class="fas fa-phone"></i>
    </div>
    <div class="input_field">
      <input type="text" placeholder="Email" class="input" id= "email" name="email"> 
      <i class="far fa-envelope"></i>
    </div>
    <div class="input_field">
      <input type="password" placeholder="Password" class="input" id= "password" name="password">
      <i class="fas fa-lock"></i>
    <div>
      <input type= "submit" value="Create" class="btn" >
    </div>
  </div>
</div>  
</form>	
</section>
    <!-- SIGN UP End -->

</section>

<!-- home section ends -->

<!-- products section starts  -->

<section class="products" id="products">



</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    

</section>

<!-- categories section ends -->
  


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Profitness <i class="fas fa-walking"></i> </h3>
            <p>Gym</p>
            <div class="share">
                <a href="http://www.facebook.com" class="fab fa-facebook-f"></a>
                <a href="http://www.twitter.com" class="fab fa-twitter"></a>
                <a href="http://www.instragram.com" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +880172..... </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-1578798</a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> profitness@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Ali Hossain Market,Shah Kabir Mazar Road, 
      Azampur, Kacha-Bazar, Uttara, Dhaka-1230</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="service.php" class="links"> <i class="fas fa-arrow-right"></i> Service </a>
            <a href="blog.php" class="links"> <i class="fas fa-arrow-right"></i> Blog </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Categories </a>
            <a href="about.php" class="links"> <i class="fas fa-arrow-right"></i> About </a>
           
        </div>

        <div class="box">
          
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> Developed by <span>  </span> Team Dominators  | all rights reserved </div>

</section>

<!-- footer section ends -->



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>