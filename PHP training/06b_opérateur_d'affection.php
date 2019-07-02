<?php
    $x = 4;
    echo 'Valeur initiale contenue dans $x : ' .$x. '<br>';

    // Retourne la valeur de $x aprés incrémentation, a savoir 5
   echo 'Valeur de $x aprés incrémentation n°1 : ' .++$x. '<br>';
    echo '$x vaut : ' .$x. '<br>';

    /* Retourne la derniére valeur de $x (5) puis l'incrémente.
    $x conntient donc maintenant 6*/
    echo 'Valeur de $x aprés incrémentation n°2  : ' .$x++. '<br>';
    echo '$x vaut : ' .$x. '<br>';

    // Décrémente la valeur de $x puis retourne le résultat (6-1 = 5)
    echo 'Valeur de $x aprés décrémentation n°1  : ' .--$x. '<br>';
    echo '$x vaut : ' .$x. '<br>';

    // Retourne la valeur de $x, puis la décrémente a nouveau. $x = 4
    echo 'Valeur de $x aprés décrémentation n°2  : ' .$x--. '<br>';
    echo '$x vaut : ' .$x;











?>