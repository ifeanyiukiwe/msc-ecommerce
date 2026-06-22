<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
}
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <head>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
    <title>Msc Computing Project</title>
</head>
<body>
  
    <div class="main">
 <div class="logo">
        <a href="index.php">
           <img src="/images/Ag1_09.jpg" alt="">
        </a>
        
    </div>
    <ul class="main-links">
        <li><a href="/home.php">Home</a></li>
        <li><a href="/product.php">Product</a></li>
        <!-- <li> <a href="/cart.php">Cart</a></li> -->
         <li>
    <a href="/cart.php" class="cart-link">
        <i class="fa-solid fa-cart-shopping"></i>

        Cart

        <span class="cart-count" id="cart-count">
            0
        </span>
    </a>
</li>
        <li><a href="/search.php"> <i class="fa-solid fa-magnifying-glass"></i></a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/about.php">Resources</a></li>
        <?php if(isset($_SESSION['user_id'])): ?>

<li>
    <a href="#">
     <?php echo $_SESSION['user_name']; ?>
    </a>
</li>

<li>
    <a href="logout.php">Logout</a>
</li>

<?php else: ?>

<li>
    <a href="login.php">Login</a>
</li>

<?php endif; ?>
<li><a href="../admin/dashboard.php">Admin</a></li>
        
    </ul>
    <!-- <div class="mobile">
        <div><a href="../product.php">Product</a></div>
        <div><a href="../cart.php">Cart</a></div>
        <div><a href="../login.php">Login</a></div>
    </div> -->
    </div>
   
</body>
</html>