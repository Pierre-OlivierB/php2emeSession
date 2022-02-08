<?php 
// Tester si c'est le deuxième appel de la page. 
if (! isset($_GET['retour'])) { 
  // Non... 
  // Déposer le cookie. 
  setcookie('test[0]','zéro'); 
  setcookie('test[1]','un'); 
  // Et recharger la page avec une information dans 
  // l'URL indiquant que c'est le deuxième passage. 
  header('Location: test.php?retour=1'); 
} else { 
  // Oui... 
  // Tester si le cookie est "revenu". 
  if (isset($_COOKIE['test'])) { // oui... 
    echo 'Cookie accepté<br />'; 
    var_dump($_COOKIE['test']); 
  } else { // non... 
    echo 'Cookie refusé'; 
  } 
} 
?>
<!DOCTYPE html>  
<html>  
  <head><meta charset="utf-8"/><title>Page 1</title></head>  
  <body> 
    <div> 
    <?php implode($_COOKIE['test']); ?><br/> 
    <!-- lien vers la page 2 --> 
    <a href="page2.php">Page 2</a> 
    </div> 
  </body> 
</html>