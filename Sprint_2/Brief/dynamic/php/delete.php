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
        <div class="navbar__login"><form method="POST" action="logout.php"><input class="btn" type="submit" value="logout" name="Login"></form></div>
    </div>
    <div class="main">
        <div class="main__title"> Modify Products </div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="../index.php"> Home</a></li>
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../products.php"> Products </a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
                
            </ul>
        </div>
        <div class="main__about">
        <?php
            /*
                select data from specific product
                ask if user is sure
                submit to delete
            */
            require_once "config.php";
            if(isset($_GET['id'])){
            
            $id = $_GET['id'];
                    // query
                $sql = "DELETE FROM products WHERE id=:id"; 
               
                $values = array(':id',$id);
    
                queryDB($sql,$values);
                echo "product id :".$id. "was deleted successfully <br>
                <a href='javascript:history.go(-2)'>Go back</a>  " ;
            }
            else {
                echo "Sorry there was some error please try again!"
            }


            ?>
        
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