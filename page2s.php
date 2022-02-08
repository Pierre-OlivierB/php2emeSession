<?php 
// Ouvrir/réactiver la session. 
session_start(); 
// Détruire la session. 
session_destroy(); 
?>
<!DOCTYPE html>  
    <html>  
        <head> 
            <meta charset="utf-8"/> 
        </head> 
        <body> 
    <div> 
        <b>Page 2</b><br/> 
<?php  
echo 'Bonjour ', $_SESSION["nom"],'<br />'; 
echo 'session_id() = ',session_id(),'<br />'; 
?>
<a href="page3.php">Page 3</a><br /> 
     </div> 
  </body> 
</html>