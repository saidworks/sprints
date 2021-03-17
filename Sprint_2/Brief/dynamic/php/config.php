<?php 
// connect 
$dsn = "mysql:host=localhost;dbname=restaurant";
$username = "root";
$password = "mysql";

$pdo = new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
/* 
for mode : 
    -SELECTSINGLE : 1
    -SELECTALL    : 2 
    -EXECUTE      : 3 

*/
function queryDB($sql,$values,$mode=3){
    global $pdo;
    $stmt = $pdo->prepare($sql);
    foreach($values as $value){
            if(is_array($value)){
            $stmt->bindValue($value[0],$value[1]);}
            else{
            $stmt->bindValue($values[0],$values[1]);
            }
    }
   
    $stmt->execute();
    if($mode==1){
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    elseif($mode==2){
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }
    }

?>