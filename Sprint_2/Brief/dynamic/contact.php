<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
    <title>Welcome to Restauranto</title>
    
</head>

<body>
    <div class="navbar">
        <div class="navbar__logo"><img src="images/logo@2x.png" alt="logo"></div>
        <div id="desktop" class="navbar__adbar">The Food you love at a price you can afford!</div>
        <a href="./php/login.php"> <div class="navbar__login"><input class="btn" type="button" value="login" name="Login"></div></a>
    </div>
    <div class="main">
        <div class="main__title"> Contact US</div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="./index.php"> Home</a></li>
                <li class="collection-item"><a href="./products.php"> Products</a></li>
                <li class="collection-item"><a href="./aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="./contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
        
           <form id="contact" class="contact-form" action="./php/contactProcess.php" method="POST">
               <div id="error"></div>
               <label for="username">Name:</label>
               <input type="text" id="username" name="username"  placeholder="enter your name please">
               <label for="email">Email:</label>
               <input type="email" id= "email"  name="email" placeholder="enter your email please">
               <label for="message">Type your message here:</label>
               <textarea name="message" id="message" cols="100" rows="10" placeholder="type your message here"></textarea>
                <input class="btn" type="submit" value="Send">
           </form>

        </div>
    </div>
    <div class="footer">
        <div class="footer__text">Join us on</div>
        <div class="footer__phone"><img src="./images/icons8-ringing-phone-96.png" alt=""></div>
        <div class="footer__fb"><img src="./images/fb.png" alt=""></div>
        <div class="footer__twitter"><img src="./images/twitter.png" alt=""></div>
        <div class="footer__instagram"><img src="./images/198px-Instagram_logo_2016.svg.png" alt=""></div>

    </div>
<script src="./js/contact.js"></script>

</body>

</html>