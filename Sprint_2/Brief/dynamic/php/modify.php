<?php 
   session_start();
   if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
       // redirect to your login page
       header("Location: login.php"); 
       exit();
   }
   $username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Welcome to Restauranto</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar__logo"><img src="../images/logo@2x.png" alt="logo"></div>
        <div id="desktop" class="navbar__adbar">
            <p class="scale-up-bl">The Food you love at a price you can afford!</p>
        </div>
        <a href="./login.php"> <div class="navbar__login"><input class="btn" type="button" value="login" name="Login"></div></a>
    </div>
    <div class="main">
        <div class="main__title"> Add Products </div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="../index.php"> Home</a></li>
                <li class="collection-item"><a href="../products.php"> Products</a></li>
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
            <?php
            /*
                select data from specific product
                output it to the sepcific input tags
                change values in input tags
            */
                require_once "config.php";
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }  
                $sql = "SELECT * FROM products WHERE id=:id";    
                $values = array(array(':id',$id));
                $result = queryDB($sql,$values,1);
                session_start();
                $_SESSION['id'] = $id;

            ?>


        <form action="modify_process.php" method="POST" enctype="multipart/form-data">
        <label for="name">Product Name</label>
        <input type="text" name="name" value=<? echo $result['name'] ?>>
        <label for="price">Price</label>
        <input type="number" name="price" value=<? echo $result['price'] ?>>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
        <input type="file" name="upload">
        <input class="btn" type="submit" name="submit" value="modify">
        </form>
       
        
        </div>
    </div>
    <div class="footer">
        <div class="footer__text">Join us on</div>
        <div class="footer__phone"><img src="../images/icons8-ringing-phone-96.png" alt=""></div>
        <div class="footer__fb"><img src="../images/fb.png" alt=""></div>
        <div class="footer__twitter"><img src="../images/twitter.png" alt=""></div>
        <div class="footer__instagram"><img src="../images/198px-Instagram_logo_2016.svg.png" alt=""></div>

    </div>
</body>
</html>