<?php
    $x = 4;
    $y = 2;
    $z = 3;

    // On peut additionner le contenue d'une variable et un nombre
    $add1 = $x + 8; // 4 + 8 = 12

    // Ou addtionner ou soustraire le contenue de deux arirables
    $add2 = $x + $y; // 4 + 2 = 6
    $sous = $x - $y; // 4 - 2 = 2

    // On peut multiplier ou diviser
    $mult = $x * $y; // 4 * 2 = 8
    $div = $x / $x; // 2 / 4 = 0.5

    // On peut récuperer le modulo ou élever a la puissance
    $mod = $x % $z; // 4 / 3 = 1 reste 1
    $exp = $x ** $y; // 4^2 = 4 * 4 = 16

    echo
        'Résultat addition 1 : ' .$add1. '<br>;
        Résultat addition 2 : ' .$add2. '<br>;
        Résultat soustraction  : ' .$sous. '<br>;
        Résultat multiplication : ' .$mutl. '<br>;
        Résultat division : ' .$div. '<br>;
        Résultat modulo : ' .$mod. '<br>;
        Résultat exponentielle : ' .$exp;
     
?>