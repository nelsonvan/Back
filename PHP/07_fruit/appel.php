<?php
// Exo : afficher le prix de 2kg de bananes en
// executant la fonction calcul() sans la copier/coller
//ni la changer

// require permet d'inmporter le fichier 'fonction.php'
//directement sur la page 'appel.php', c'est comme si on 
//avait fait un copier / coller
require_once("fonction.php");
// include_onnce('fonction.php)
echo calcul('Bananes', 2000);
?>