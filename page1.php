<?php 
// Ouvrir/réactiver la session. 
session_start(); 
// Enregistrer deux informations dans la session. 
$_SESSION['prenom'] = 'Olivier'; 
$_SESSION['informations'] =  // c’est un tableau... 
      array('prenom'=>'Olivier','nom'=>'TOM'); 
?> 
<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8" />  
    <title>Page 1</title> 
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 
    <title>Page 1</title>
  </head> 
  <body> 
    <div><a href="page2s.php">Page 2</a></div> 
  </body> 
</html>