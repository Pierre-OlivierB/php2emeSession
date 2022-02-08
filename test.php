<?php
$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);
echo "Création du cookie objet";
echo "<br>";
setcookie('objet', $myJSON); 
echo "<br>";
?>

<a href="json_decode.php">Envoyer</a>