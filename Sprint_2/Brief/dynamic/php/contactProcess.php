
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
        <div class="main__title"> Contact US</div>
        <div class="main__sidebar">
            <ul class="sidebar-collection">
                <li class="collection-item"><a href="../index.php"> Home</a></li>
                <li class="collection-item"><a href="../aboutUs.php"> About Us</a></li>
                <li class="collection-item"><a href="../contact.php"> Contact Us</a></li>
            </ul>
        </div>
        <div class="main__about">
        <?php
            if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
            }
            else {
                echo "Please fill all required fields!";
            }
            // another way of doing this  
            // extract($_POST);
            require_once "config.php";
            // insert into table contactus
            // $sql = "INSERT INTO contactus (name,email,message) VALUES('$name','$email','$message')";
            $sql = "INSERT INTO contactus (name,email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";
            // $pdo->query($sql);
            $values = array(array(':name',$name),array(':email',$email),array(':message',$email));
            $result = queryDB($sql,$values);
            echo "<p> We received your message Mr/Mrs $name, we will contact you as soon as we can, meanwhile we hope you enjoy our menu";
            // Mail function to send mail to the owner reference PHP manual another option is PHP MAILER to be studied further 
            // $message = "Test"; this solution did not work for me and I do not want to change php.ini for now

            // // In case any of our lines are larger than 70 characters, we should use wordwrap()
            // $message = wordwrap($message, 70, "\r\n");

            // // Send
            // mail('zitouni.sd@gmail.com', 'Message from '.$name, $message,"From: webmaster@{$_SERVER['SERVER_NAME']}"); 

            //             These answers are outdated and depreciated. Best practice..

            // composer require phpmailer/phpmailer
            // The next on your sendmail.php file just require the following

          
            //Import PHPMailer classes into the global namespace
            //These must be at the top of your script, not inside a function
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            
            //Load Composer's autoloader
            require '../vendor/autoload.php';
            
            //Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'said.storage@gmail.com';                     //SMTP username
                $mail->Password   = '2443421@Sa';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom($email, 'Mailer');
                $mail->addAddress('said.storage@gmail.com', 'Joe User');     //Add a recipient
                $mail->addAddress('said.storage@gmail.com');               //Name is optional
                $mail->addReplyTo($email, 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                // //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = $message;
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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