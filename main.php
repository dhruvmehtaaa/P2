<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAF NOW</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->
<center>
<h1>

    <p class="neww">
    <q>Save Plants Initiative</q>
</p>

</h1>
</center>
<header>

    <div class="header-1">
        
        <div class="call">
            
            <a href="logout.php"  style="text-align: right;">Logout</a>
            
            <a href="carter.html" target="_blank">Proceed To Cart</a>
        </div>
    
    </div>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#category">category</a>
            <a href="#product">product</a>
            <a href="#deal">deal</a>
            <a href="#contact">list item</a>
        </nav>
            
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user-circle"></a>
        

    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider1.jpg);">
                    <div class="content">
                        <span>upto 75% off</span>
                        <h3>plant big sale special offer</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider2.jpg);">
                    <div class="content">
                        <span>upto 45% off</span>
                        <h3>plant make people happy</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider3.jpg);">
                    <div class="content">
                        <span>upto 65% off</span>
                        <h3>decorate your home now</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images/banner1.jpg" alt="">
        <div class="content">
            <span>new arrivals</span>
            <h3>house plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="banner">
        <img src="images/banner2.jpg" alt="">
        <div class="content">
            <span>new arrivals</span>
            <h3>office plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

<h1 class="heading"> shop by category </h1>

<div class="box-container">

    <div class="box">
        <img src="images/cat1.jpg" alt="">
        <div class="content">
            <h3>bonsai</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat2.jpg" alt="">
        <div class="content">
            <h3>plants for house</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat3.jpg" alt="">
        <div class="content">
            <h3>plants for office</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat4.jpg" alt="">
        <div class="content">
            <h3>gift plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

<h1 class="heading"> new products </h1>

<div class="box-container">

    <div class="box">
        <span class="discount">-10%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product1.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">???499<span>???749</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-25%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product2.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">???499 <span>???749</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-7%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product3.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">???399 <span>???424</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-4%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product4.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">???499<span>???599</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-13%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product5.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">???799 <span>???999</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product6.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">???549 <span>???649</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

</div>

</section>



<section class="deal" id="deal">

    <h1 class="heading"> featured deal</h1>

    <div class="row">

        <div class="content">
            <h3 class="title">don't miss the deal</h3>
            <p></p>
            <div class="count-down">
                <div class="box">
                    <h3 id="day">12</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">5</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">12</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">03</h3>
                    <span>second</span>
                </div>
            </div>
            <a href="#" class="btn">check out deal</a>
        </div>

        <div class="image">
            <img src="images/deal-img.jpg" alt="">
        </div>

    </div>

</section>

<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">list your products</h1>

<div class="row">

    <form action="">

        <div class="inputBox">
            <input type="text" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input type="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <input type="number" required>
            <label>number</label>
        </div>
        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" value="send message" class="btn">

    </form>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
        
    </div>

    <!--<h1 class="credit"> created by <span>  </span> | all rights reserved! </h1>-->
    
</section>

<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="scroll-top fas fa-angle-up"></a>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>