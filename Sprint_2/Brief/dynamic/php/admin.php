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
    <link rel="stylesheet" href="../style/main.css">
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
        <div class="navbar__logo"><img src="../images/logo@2x.png" alt="logo"></div>
        <div id="desktop" class="navbar__adbar">The Food you love at a price you can afford!</div>
        <div class="navbar__login"><form method="POST" action="logout.php"><input class="btn" type="submit" value="logout" name="Login"></form></div>
    </div>
    <div class="main">
        <div class="main__title"> Dashboard</div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><?php echo "Welcome ".$username; ?></li>
                <li class="collection-item"><a href="../index.php"> Home</a></li>
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
        <?php 
        require_once "config.php";
        echo "<div class='add'><a href='add.php'>add new product</a></div>";
        echo "<table class='dash'>
        <thead>
        <tr>
        <td>id</td>
        <td>Name</td>
        <td>Price</td>
        <td>Action</td>
        </tr>
        </thead>";
        $sql = "SELECT * FROM products";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchall(PDO::FETCH_ASSOC); ?>
        <? foreach($result as $result) : ?>
        <tr>
            <td><?= $result['id'] ?></td>
            <td><?= $result['name'] ?></td>
            <td><?= $result['price'] ?></td>
            <td><a href="modify.php?id=<? echo $result['id'] ?>"> modify</a> | <a href='delete.php?id=<? echo $result['id'] ?>'>delete</a></td>
            </tr>

        <? endforeach; ?>
        </table>
        
        </div>
    </div>
    <div class="footer">
        <div class="footer__text">Join us on</div>
        <div class="footer__phone"><img src="../images/icons8-ringing-phone-96.png" alt=""></div>
        <div class="footer__fb"><img src="../images/fb.png" alt=""></div>
        <div class="footer__twitter"><img src="../images/twitter.png" alt=""></div>
        <div class="footer__instagram"><img src="../images/198px-Instagram_logo_2016.svg.png" alt=""></div>

    </div>
<script src="./js/menu.js"></script>
</body>

</html>