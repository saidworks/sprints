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
        <div class="main__title"> Add Products </div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="../index.php"> Home</a></li>
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
        <form action="" method="POST">
        <label for="name">Product Name</label>
        <input type="text" name="name">
        <label for="price">Price</label>
        <input type="text" name="price">
        <input class="btn" type="submit" name="submit" value="Add">
        </form>
        <?php
        /* 
        //-add block to avoid duplicates 
          -for file upload : 
            1. Add column to the table for image path storing
            2. Add upload to the form 
            3. Add superglobal scripts for uploading image
            4. Add image link to the value binding method
        */
        require_once "config.php";
        $adminId=1;   
            if(isset($_POST['name']) and isset($_POST['price'])){
                $name = $_POST['name'];
                $price = $_POST['price'];}
                // query
            $sql = "INSERT IGNORE INTO products (adminId,name,price) VALUES(:adminId,:name,:price)"; 
           
            $values = array(array(':adminId',$adminId),array(':name',$name),array(':price',$price));

            queryDB($sql,$values);
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
</body>
</html>