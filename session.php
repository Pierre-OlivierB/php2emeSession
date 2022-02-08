<?php 
// Récupérer la valeur de session_id avant. 
$avant = session_id(); 
// Ouvrir/réactiver la session. 
session_start(); 
// Récupérer la valeur de session_id après. 
$apres = session_id(); 
// Affichage. 
$actuel = date("H:i:s"); 
echo "Heure : ".$actuel."<br />"; 
echo "Avant : ".$avant."<br />"; 
echo "Après : ".$apres ."<br />"; 
?>