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
        <h3>GET IN TOUCH WITH US</h3>
        <form action="php" method="post">
            <div class="contact-info">
                <input type="text"  id="text" placeholder="First Name">
                <input type="text"  id="text" placeholder="Last Name">
            </div>
                <div class="contact-info">
                    <input type="email" name="email" id="email" placeholder="youremail@.com">
                    <input type="number" name="number" id="number" placeholder="Phone Number">
                </div>
                
                <textarea name="text" id="text" placeholder="Anything we should know about your pet"></textarea>
                <button type="submit">Send</button>
        </form>
        <div class="subscribe">
            <h4>SUBSCRIBE OUR NEWSLETTER</h4>
            <form action="php" method="post">
                <div class="contact-info">
                <input type="text"  id="text" placeholder="First Name">
                 <input type="email" name="email" id="email" placeholder="your@email.com">
                 <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <div style="margin-top:20px;">
    <?php include("components/footer.php"); ?>
  </div>
</body>
</html>