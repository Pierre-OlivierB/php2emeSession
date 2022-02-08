<?php 
if (isset($_COOKIE['objet'])) { 
   $json = $_COOKIE['objet'];
   var_dump($json);
   echo "<br>";
   $myObj = json_decode($json);
   var_dump($myObj);
   echo "<br>";
}else{
    echo 'Le cookie "objet" n\'existe pas';
}
?>
<a href="test.php">Retour</a>