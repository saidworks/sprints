<?php
$name = "";
$nameReverserd = "";
if (isset($_GET["name"])){
    $name = $_GET["name"];
}
else {
    $name='invalid entry';
}


$html = " <!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Palindrom Word</title>
<style>
body {
text-align : center;}
img {
width : 30%;
height : auto;
}
</style>
</head>
<body>
<h1> Is palindrom?</h1>
<img src=\"./palindromes-clipart-3.jpg\">
<form action=\".\palindrom.php\" method='GET'>
<input type='text' name='name'>
    
<input type='submit' value='submit'>
</form>
</body>
</html>"
;
echo $html;



for($i=0; $i <= strlen($name); $i++){
    $nameReverserd .= $name[strlen($name)-$i];
    
}
if($nameReverserd ===$name){
    echo "$name is a palindrom word";
}
else{
    echo "$name is not a palindrom word";
}


?>
