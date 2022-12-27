<?php

$temperature = $_GET["Temperature"];
$humidity= $_GET["Humidity"];


$text ="Temperature: {$temperature} C Humidity: {$humidity} %";

$admin_email 	= "singhrathore.2008@gmail.com";
$email 	= "singhrathore.2008@gmail.com";
$subject ="Temperature and Humidity Report";


//send email
mail($admin_email,"$subject",$text,"From:" .$email);

?>
