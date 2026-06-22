   <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Disclaimer -Msc Project</title>
    
</head>
<body class="home-entry">

    <?php include("components/nav.php"); ?>
    <div class="main-heading">
        <div class="sub">
            <h4>Everything Game</h4>
            <p>Fascinating.Fun.Affordable</p>
        <button><a href="product.php">SHOP NOW</a></button>
        </div>
        
    </div>
    <!-- <div class="about">
        <h1>About Pawfect</h1>
        
            <p>Pawfect Store is an academic e-commerce platform developed as part of an Msc Computing Project. 
                The system provides an online enviroment where pet owners can browse and purchase essential pet  products conveniently.
            </p>
            <div class="about-container">
        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-award"></i>
            </div>
            <div class="about-info">
                <h3>Best In The Industry</h3>
                <p>We stand tall with our Industry recognitions as the very best.</p>
            </div>
        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-award"></i>
            </div>
            <div class="about-info">
                <h3>Best In The Industry</h3>
                <p>We stand tall with our Industry recognitions as the very best.</p>
            </div>
        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-award"></i>
            </div>
            <div class="about-info">
                <h3>Best In The Industry</h3>
                <p>We stand tall with our Industry recognitions as the very best.</p>
            </div>
        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-award"></i>
            </div>
            <div class="about-info">
                <h3>Best In The Industry</h3>
                <p>We stand tall with our Industry recognitions as the very best.</p>
            </div>
        </div>
        
    </div> -->
    <div class="about">
    <h1>About Padfect</h1>
    <p>
        Padfect Store is an academic e-commerce platform developed as part of an MSc Computing Project. 
        The system provides an online environment where pet owners can browse and purchase essential pet products conveniently.
    </p>

    <div class="about-container">
        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-award"></i>
            </div>
            <div class="about-info">
                <h3>Best In The Industry</h3>
                <p>We stand tall with our industry recognitions as the very best.</p>
            </div>
        </div>

        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-heart"></i>
            </div>
            <div class="about-info">
                <h3>Customer Friendly</h3>
                <p>We prioritize our customers' satisfaction above all.</p>
            </div>
        </div>

        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-truck"></i>
            </div>
            <div class="about-info">
                <h3>Fast Delivery</h3>
                <p>Quick and reliable delivery service for all your orders.</p>
            </div>
        </div>

        <div class="about-card">
            <div class="about-icon">
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="about-info">
                <h3>High Quality</h3>
                <p>We ensure top-quality products for all game lovers.</p>
            </div>
        </div>
    </div>
</div>
    <div class="product">
       <h1>
         Our Products
       </h1>
       <div class="product-container">
        <div class="product-card">
            <div class="product-img">
                <img src="./images/pet-food.jpg" alt="Dog Food">
            </div>
            <div class="product-info">
                <h3>Pet Food</h3>
                <p>Healthy Nutrition for active pets with natural ingredient</p>
                <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="product-bottom">
                    <span class="price">£25.99</span>
                    <button class="cart-btn"><i class="fa-solid fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img">
                <img src="./images/pet-toy.jpg" alt="pet-toy">
            </div>
            <div class="product-info">
                <h3>Pet Toy</h3>
                <p>Fun toys to keep your pets happily engaged</p>
                <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="product-bottom">
                    <span class="price">£25.99</span>
                    <button class="cart-btn"><i class="fa-solid fa-shopping-cart"> </i> </button>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img">
                <img src="./images/harness.jpg" alt="harness">
            </div>
            <div class="product-info">
                <h3>Pet Harness</h3>
                <p>Quality Pet Harness</p>
                <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="product-bottom">
                    <span class="price">£25.99</span>
                    <button class="cart-btn"><i class="fa-solid fa-shopping-cart"> </i></button>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img">
                <img src="./images/cage.jpg" alt="cage">
            </div>
            <div class="product-info">
                <h3>Pet Cage</h3>
                <p>premium comfort resting place for your pet</p>
                <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="product-bottom">
                    <span class="price">£25.99</span>
                    <button class="cart-btn"><i class="fa-solid fa-shopping-cart"> </i></button>
                </div>
            </div>
        </div>
       </div>
       <div class="product-end">
        <button><a href="product.php">View More  <i class="fa-solid fa-arrow-right"></i></a></button>
        
       </div>
    </div>
    
    <div class="useful-marquee">

    <div class="marquee-track">

        <a href="https://www.w3schools.com/" target="_blank">
            <i class="fa-brands fa-html5"></i>
            <h3>HTML5</h3> 
        </a>

        <a href="https://www.w3schools.com/" target="_blank">
            <i class="fa-brands fa-css3"></i>

            <h3>CSS</h3>

        </a>

        <a href="https://www.w3schools.com/" target="_blank">
              <i class="fa-solid fa-database"></i>

            <h3>MySQL</h3>
        </a>

        <a href="https://www.w3schools.com/" target="_blank">
            <i class="fa-brands fa-js"></i>

            <h3>JavaScript</h3>
        </a>

        <a href="https://www.w3schools.com/" target="_blank">
            <i class="fa-brands fa-php"></i>

            <h3>PHP</h3>
        </a>

        <a href="about.php">
            ➜ View More Links
        </a>

    </div>

</div>

    <div class="contact">
        <h3>GET IN TOUCH WITH US</h3>
        <form action="php" method="post">
            <div class="contact-info">
                <input type="text"  id="text" placeholder="First Name">
                <input type="text"  id="text" placeholder="Last Name">
            </div>
                <div class="contact-info">
                    <input type="email" name="email" id="email" placeholder="your@email.com">
                    <input type="number" name="number" id="number" placeholder="Phone Number">
                </div>
                
                <textarea name="text" id="text" placeholder="Anything we should know about your game"></textarea>
                <button type="submit">Send</button>
        </form>
        
    </div>
    <div style="margin-top:20px;">
    <?php include("components/footer.php"); ?>
    <script src="/js/product.js"></script>
    <script src="/js/cart-counter.js"></script>
  </div>
</body>
</html>