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
                output it to the sepcific input tags
                change values in input tags
            */
            require_once "config.php";
            session_start();
            $id = $_SESSION['id'];
            if(isset($_POST['name']) and isset($_POST['price'])){
                $name = $_POST['name'];
                $price = (int)$_POST['price'];
         
            }

             
    
            $directory = "products/";
            $destination = $directory.$name.$_FILES['upload']['name'];
            $filename =$_FILES['upload']['tmp_name'];
        
            
                //check if the upload was successful
                // I need to write more code to check type of image
            if(isset($_POST["submit"])){
                if($_FILES['upload']['error']==0){
        
                    
                    // query
                $sql = "UPDATE products SET name=:name, price=:price, image=:image WHERE id=$id"; 
               
                $values = array(array(':name',$name),array(':price',$price),array(':image',$destination));
    
                queryDB($sql,$values);
    
                     
                if (move_uploaded_file($filename,"$destination")){
                    echo " product's information successfuly updated ";
                }
                    else  {
                    echo "failure";
                }
                }
                    else {
                        if($_FILES['upload']['error']==1 || $_FILES['upload']['error']==2){
                            echo "Your file is too big please select a smaller one! then try again!<br>";}
                        else{
                            echo "Your information has been successfully modified, the previous product picture was not changed <br>
                            <a href='javascript:history.go(-2)'>Go back</a>  ";
                                   // query
                            $sql = "UPDATE products SET name=:name, price=:price WHERE id=$id"; 
                        
                            $values = array(array(':name',$name),array(':price',$price));
                
                            queryDB($sql,$values);
                            
                            
                            }
                }
    
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