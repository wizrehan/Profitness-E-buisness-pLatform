<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Fitness</title>
     
    <link href="image/logo.png" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/style.css">
	
    <style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img width="100" height="100" src="image/logo.png"> </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="service.html">Service</a>
        <a href="blog.html">Blog</a>
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

	
<!-- Login section starts  -->

    <form action="log.php" class="login-form" method="POST">
        <h3>login now</h3>
		
        <input type="email" placeholder="Your Email" class="box" id= "email" name="email">
		
		    <input type="password" placeholder="Your Password" class="box" id= "password" name="password">
		 
        <p>don't have an account? <a href="reg.php"> create new account </a></p>
        <input type="submit" id="submit"name= "submit" value="login now" class="btn">
    </form>

</header>
<!-- Login section end -->
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="w3-content w3-display-container" style="max-width:1400px">
  <img class="mySlides" src="image/banner-slide-4.jpg" style="width:100%">
  <img class="mySlides" src="image/banner-slide-1.jpg" style="width:100%">
  <img class="mySlides" src="image/banner-slide-3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

</section>

<!-- home section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/Dumbbell.jpg" alt="">
                <h3>Dumbbell</h3>
                <div class="price"> Tk 450/- </div>
                <div class="stars">
                   
                  
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/Outtobe Hand Gripper.jpg" alt="">
                <h3>Outtobe Hand Gripper</h3>
                <div class="price"> Tk 350/- </div>
                <div class="stars">
             </div>
                <a href="" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/tummy.jpg" alt="">
                <h3>Tummy Trimmer Double Spring</h3>
                <div class="price">Tk 499/- </div>
                <div class="stars">
                  
                </div>
                <a href="r" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/PowerRack.jpg" alt="">
                <h3>Power Rack</h3>
                <div class="price">Tk 8550/- </div>
                <div class="stars">
                    
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/CableCrossoverStation.jpg" alt="">
                <h3>Cable Crossover Station</h3>
                <div class="price">Tk 7800/- </div>
                <div class="stars">
                    
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/FLYBIRD-Adjustable-Weight-Bench.jpg" alt="">
                <h3>FLYBIRD Adjustable Weight Bench</h3>
                <div class="price">Tk 5900/- </div>
                <div class="stars">
                    
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/hammer-strength-machine.jpg" alt="">
                <h3>Hammer Strength Machine</h3>
                <div class="price"> Tk 19900/- </div>
                <div class="stars">
                   
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/Chest Press Machine.jpg" alt="">
                <h3>Chest Press Machine</h3>
                <div class="price"> Tk 18210/- </div>
                <div class="stars">
                    
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/Cardio Machines.jpg" alt="">
            <h3>Cardio Machines</h3>
            <p>upto 20% off </p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/Free Weights.jpg" alt="">
            <h3>Free Weights</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/Gym Packages.jpg" alt="">
            <h3>Gym Packages</h3>
            <p>upto 35% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/Gym Strength Equipment.jpg" alt="">
            <h3>Gym Strength Equipment</h3>
            <p>upto 15% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
     
    </div>

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
        <a href="index.html"class="links"> <i class="fas fa-arrow-right"></i>Home</a>
        <a href="service.html"class="links"> <i class="fas fa-arrow-right"></i>Service</a>
        <a href="blog.html"class="links"> <i class="fas fa-arrow-right"></i>Blog</a>
        <a href="about.html"class="links"> <i class="fas fa-arrow-right"></i>About</a>
        <a href="#categories"class="links"> <i class="fas fa-arrow-right"></i>Categories</a>
           
        </div>

        <div class="box">
          
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> Developed by <span>  </span> Mashrul and Rahat  | all rights reserved </div>

</section>

<!-- footer section ends -->

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>