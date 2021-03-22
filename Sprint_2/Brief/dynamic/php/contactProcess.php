
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

          
         
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

            //Import PHPMailer classes into the global namespace
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;

            require '../vendor/autoload.php';

            //Create a new PHPMailer instance
            $mail = new PHPMailer();

            //Tell PHPMailer to use SMTP
            $mail->isSMTP();

            //Enable SMTP debugging
            //SMTP::DEBUG_OFF = off (for production use)
            //SMTP::DEBUG_CLIENT = client messages
            //SMTP::DEBUG_SERVER = client and server messages
            $mail->SMTPDebug = SMTP::DEBUG_OFF;

            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';
            //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
            //if your network does not support SMTP over IPv6,
            //though this may cause issues with TLS

            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 465;

            //Set the encryption mechanism to use - STARTTLS or SMTPS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;

            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = 'said.storage@gmail.com';

            //Password to use for SMTP authentication
            $mail->Password = '2443421@Sa';

            //Set who the message is to be sent from
            $mail->setFrom('said.storage@gmail.com', 'Said Green');


            //Set who the message is to be sent to
            $mail->addAddress('zitouni.sd@gmail.com');

            //Set the subject line
            $mail->Subject = 'PHPMailer GMail SMTP test';

            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->isHTML(true); 
            $mail->Body    = $message;

            // //Replace the plain text body with one created manually
            $mail->AltBody = $message;
            
            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo " <br> Have a great day!";
                //Section 2: IMAP
                //Uncomment these to save your message in the 'Sent Mail' folder.
                #if (save_mail($mail)) {
                #    echo "Message saved!";
                #}
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