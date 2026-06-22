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
        <h3>Login</h3>
        <form action="login_process.php" method="post">
            
                <div class="contact-info">
                    <input type="email" name="email"  placeholder="youremail@.com">
                    <input type="password" name="password"  placeholder="password!">
                </div>                 
                 
                <button type="submit">Login</button>
        </form>
        <div class="signup">
            <span class="up">Create Account <a href="signup.php">Signup</a></span>
        </div>
    </div>
    <div style="margin-top:20px;">
    <?php include("components/footer.php"); ?>
  </div>
</body>
</html>