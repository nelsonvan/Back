<?php
$x =10;
echo 'Valeur initiale contenue dans $x : ' .$x. '<br>';


/*On ajoute 6 a la valeur de $x, puis reaffecte le
*nouvelle valeur dans $x*/
$x += 6;
echo 'Valeur intéermédiaire contenue dans $x : ' .$x. '<br>';


/*On soustrait 3 a la derniére valeur connue de $x,
puis on réafecte la nouvelle valeur dans $x */ 
$x -= 3; // Equivalent a écrire $x = $x - 3
echo 'Valeur finale contenue dans $x : ' .$x;
?>

