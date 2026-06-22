<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Disclaimer -Msc Project</title>
</head>
<body>
    <?php include("components/nav.php"); ?>
    <div class="contact">
        <h3>Create Account</h3>
        <form action="signup_process.php" method="post">
            <div class="contact-info">
                <input type="text"  name="first_name" placeholder="First Name">
                <input type="text"  name="last_name" placeholder="Last Name">
            </div>
                <div class="contact-info">
                    <input type="email" name="email" placeholder="youremail@.com">
                    <input type="password" name="password"  placeholder="password!">
                </div>
                
                <div class="contact-info">
                    <input type="number" name="phone"  placeholder="Phone Number">
                    
                    <input type="date" name="dob"  placeholder="dob">
                </div>
                <div class="contact-info">
                   
                </div>
                <button type="submit">Sign Up</button>
        </form>
        <div class="login">
            <span class="gin">Already have an Account <a href="login.php">Login</a></span>
        </div>
    </div>
    <div style="margin-top:20px;">
    <?php include("components/footer.php"); ?>
  </div>
</body>
</html>