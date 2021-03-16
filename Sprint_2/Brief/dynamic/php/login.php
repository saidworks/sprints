<?php 
// //create admin
//  $dsn = "mysql:host=localhost;dbname=restaurant";
//  $username = "root";
//  $password = "mysql";
//  $pdo = new PDO($dsn,$username,$password);
//  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//  // insert into table contactus
//  $sql = "INSERT INTO users (firstname,lastname,email,password) VALUES(:firstname,:lastname,:email,:password)";
// //  $sql = "INSERT INTO contactus (name,email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";
//  // $pdo->query($sql);
//  $stmt = $pdo->prepare($sql);
//  $values = array(array(':firstname',"Said"),array(':lastname',"ZITOUNI"),array(':email',"zitouni.sd@gmail.com"),array(':password',password_hash("restauranto",PASSWORD_DEFAULT)));
//  foreach($values as $value){
//          $stmt->bindValue($value[0],$value[1]);
//  }
//  $stmt->execute(); 
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
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
        <form action="" method="POST">
        <label for="username">Username (your email)</label>
        <input type="email" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit" name="submit">
        </form>
        <?php
            $dsn = "mysql:host=localhost;dbname=restaurant";
            $username = "root";
            $pass = "mysql";
            $pdo = new PDO($dsn,$username,$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           
            if(isset($_POST['username']) and isset($_POST['password'])){
                $name = $_POST['username'];
                $password = $_POST['password'];
                // query
            $sql = "SELECT * FROM users WHERE email=:username";  
            $stmt = $pdo->prepare($sql);
            $value = array(':username',$name);
            $stmt->bindValue($value[0],$value[1]);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $result;
            if(password_verify($password,$result['password'])){
                    echo "Welcome ".$result["firstname"];
                    //redirect using javascript
                    // echo "<script> window.location.assign('admin.php'); </script>";
                    //redirect using php 
                    header("Location: admin.php"); 
                    exit;
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
<script src="./js/menu.js"></script>
</body>

</html>