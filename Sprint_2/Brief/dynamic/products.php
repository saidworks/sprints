


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.php">
    <title>Welcome to Restauranto</title>
    <style>
      .dash {
            border: 1px solid black;
            padding: 1%;
        }
    .dash {
            width: 100%;
        }
    tr,td {
        padding: 1%;
        border: 1px solid black;
    }
    .add{
        float:right;
        margin:2% 3%;
    }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar__logo"><img src="images/logo@2x.png" alt="logo"></div>
        <div id="desktop" class="navbar__adbar">
            <p class="scale-up-bl">The Food you love at a price you can afford!</p>
        </div>
        <a href="./php/login.php"> <div class="navbar__login"><input class="btn" type="button" value="login" name="Login"></div></a>
    </div>
    <div class="main">
        <div class="main__title">Our Menu</div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="./index.php"> Home</a></li>
                <li class="collection-item"><a href="./products.php"> Products</a></li>
                <li class="collection-item"><a href="./aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="./contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__products">
            <?
                require_once "./php/config.php";
                $sql = "SELECT * FROM products";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchall(PDO::FETCH_ASSOC); ?> 
              
              <?  foreach($result as $value) : ?>
            
        
        <div class="products-panel" id="desktop-products">
            <p class="description"><?= $value['name'];?> | <?= $value['price'];?> DH</p>
        </div>
        <? endforeach; ?>
        
    </div>
    </div>
    <div class="footer">
        <div class="footer__text">Join us on</div>
        <div class="footer__phone"><img src="./images/icons8-ringing-phone-96.png" alt=""></div>
        <div class="footer__fb"><img src="./images/fb.png" alt=""></div>
        <div class="footer__twitter"><img src="./images/twitter.png" alt=""></div>
        <div class="footer__instagram"><img src="./images/198px-Instagram_logo_2016.svg.png" alt=""></div>

    </div>
<script src="./js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</body>

</html>