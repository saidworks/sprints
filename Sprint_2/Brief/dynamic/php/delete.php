<?php
            /*
                select data from specific product
                ask if user is sure
                submit to delete
            */
            require_once "config.php";
            if(isset($_GET['id'])){
            echo $id;
            $id = $_GET['id'];
                    // query
                $sql = "DELETE FROM products WHERE id=:id"; 
               
                $values = array(':id',$id);
    
                queryDB($sql,$values);}


            ?>