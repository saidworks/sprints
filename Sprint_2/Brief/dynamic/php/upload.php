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
            //define variable 

            $adminId=1;   
            if(isset($_POST['name']) and isset($_POST['price'])){
                $name = $_POST['name'];
                $price = $_POST['price'];}


            $directory = "products/";
            $destination = $directory.$name.$_FILES['upload']['name'];
            $filename =$_FILES['upload']['tmp_name'];
        
        
            //check if the upload was successful
            // I need to write more code to check type of image
        if(isset($_POST["submit"])){
            if($_FILES['upload']['error']==0){
                // switch($_FILES['upload']['type']){
                //     case[]

                // }  
            if (move_uploaded_file($filename,"$destination")){
                echo "file uploaded";
            }
                else  {
                echo "failure";
            }
            }
                else {
                    if($_FILES['upload']['error']==1 || $_FILES['upload']['error']==2){
                        echo "Your file is too big please select a smaller one! then try again!<br>";}
                    else{
                        echo "your file is only partly uploaded";
                        }
            }

            }
       
      
                // query
            $sql = "INSERT IGNORE INTO products (adminId,name,price,image) VALUES(:adminId,:name,:price,:image)"; 
           
            $values = array(array(':adminId',$adminId),array(':name',$name),array(':price',$price),array(':image',$destination));

            queryDB($sql,$values);
?>