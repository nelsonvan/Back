<?php
    $x = 4;

     // On peut additionner le contenue d'une variable et un 
    $add1 = $x + 8; // 4 + 8 = 12

    // On modifie une prmiére fois la valeur contenue dans $x
    $x = 6; 
    $add2 = $x + 8; // 6 + 8 = 14

    // On affecte deux fois la derniére valeur comme de $x a $x
    $x = $x * 2;

    echo
        'Résultat addition 1 : ' .$add1. '<br>
        Résultat addition 2 : ' .$add2. '<br>
        En fin de script, $x contient la valeur : ' .$x;
       

?>