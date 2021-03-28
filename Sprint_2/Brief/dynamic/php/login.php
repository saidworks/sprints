<?php 
require_once "config.php";
 // create admin
//  $sql = "INSERT INTO admin (username,password,email,firstname,lastname) VALUES(:username,:password,:email,:firstname,:lastname)";
//  $values = array(array(':username',"admin"),array(':firstname',"Said"),array(':lastname',"ZITOUNI"),array(':email',"zitouni.sd@gmail.com"),array(':password',password_hash("restauranto",PASSWORD_DEFAULT)));
//  queryDB($sql,$values);
//insert products
// $sql = "INSERT INTO products (name,price,adminId) VALUES(:name,:price,:adminId)";
// $values = array(array(':name',"lentils"),array(':price',10),array(':adminId',1));
// queryDB($sql,$values);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <title>Welcome to Restauranto</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar__logo"><img src="../images/logo@2x.png" alt="logo"></div>
        <div id="desktop" class="navbar__adbar">The Food you love at a price you can afford!</div>
        <div class="navbar__login"><input class="btn" type="button" value="login" name="Login"></div>
    </div>
    <div class="main">
        <div class="main__title"> Login </div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="../index.php"> Home</a></li>
                <li class="collection-item"><a href="../products.php"> Products</a></li>
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
        
        <form id="form" action="" method="POST">
        <div id="error"></div>
        <label for="username">Username (your email)</label>
        <input type="email" id="username" name="username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
        require_once "config.php";
           
            if(isset($_POST['username']) and isset($_POST['password'])){
                $name = $_POST['username'];
                $password = $_POST['password'];
                // query
            $sql = "SELECT * FROM users WHERE email=:username"; 
            $values = array(':username',$name);

            $result=queryDB($sql,$values,1);

            if(password_verify($password,$result['password'])){
                    echo "Welcome ".$result["firstname"];
                    //redirect using javascript
                    // echo "<script> window.location.assign('admin.php'); </script>";
                    //redirect using php 
                    session_start();
                    $_SESSION['username'] = $result["firstname"];
                    header("Location: admin.php"); 
                    exit();
                    
                }
                else{
                    echo "login failed";
                }

            }
            else {
                echo "Please fill all required fields!";
            }

        ?>

        
        </div>
    </div>
    <div class="footer">
        <div class="footer__text">Join us on</div>
        <div class="footer__phone"><img src="./images/icons8-ringing-phone-96.png" alt=""></div>
        <div class="footer__fb"><img src="../images/fb.png" alt=""></div>
        <div class="footer__twitter"><img src="../images/twitter.png" alt=""></div>
        <div class="footer__instagram"><img src="../images/198px-Instagram_logo_2016.svg.png" alt=""></div>

    </div>
<script src="../js/menu.js"></script>
<script src="../js/form.js"></script>
</body>

</html>