<!DOCTYPE html>
<html lang="fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href="entrainement.css">
    <title>Entrainement PHP</title>
</head>
<body>
    <div class="container">
    <h2 class="display-4 text-center">Ecriture et affichage</h2>
    <!-- Nous pouvons écrire du html dans un fichier ayant l'extension
    <PHP, l'inverse n'est pas possible -->

    <?php // Ouverture de la balise PHPH
    // Il est possible d'ouvrir la balise PHPH autant de fois que l'on
   // souhaite sur un fichier PHP

   echo 'Bonjour ! <br>'; // echo est une instruction d'affichage que l'on
   // peut traduire par 'affiche moi'
   print 'Bonjour !'; // print est une autre instruction d'affichage,
   // pas de différance avec 'echo'

   echo '<hr><h2  class="display-4
   text-center">Commentaires</h2><hr>';
   // Fermeture de la balise php
   ?>
   <?= "Allo" ?>  <!-- le = remplace le 'echo'  -->
   <strong>Bonjour</strong>  <!-- nous voyons qu'il est également de fermer er réouvrir PHP,
    pour mélanger du code HTML en PHP -->

    <?php
        echo 'Texte'; // ceci est un commentaires sur une seul ligne
        echo 'Texte'; /* ceci est un commantaire
        sur plusieurs lignes 
        */

        
     echo '<hr><h2  class="display-4 text-center">Variables : Type /
     Déclaration / Affection</h2><hr>';
     // Une variable est un espace nommé permettant de conserver une
     // valeur

     // $2a -> erreur !! / $a2 -> OK
     // Caractére autorisées : A a Z / a a z / de 0 a 9
     // pas d'accents, pas d'espaces
     $a = 127; // affectation de 127 dans la variable nommé "a"

     // gettype est une fonction prédefinie qui retourne le type
     // d'une variable
     echo gettype($a); // il s'agit d'un entier : INTEGER
     echo'<br>';
    

     $b = 1.5;
     echo gettype($b); // un nombre a virgule : DOUBLE 
     echo'<br>';

     
     $c = "une chaine";
     echo gettype($c); 
     echo'<br>';

     
     // Entre quotes c'est chaine de caractéres
     $d = '127';
     echo gettype($d); // une chaine de caractéres : STRING 
     echo '<br>';

     $e = true;
     echo gettype($e); // BOOLEAN
     echo '<br>';

     
     $f = false;
     echo gettype($f); // BOOLEAN
     echo '<br>';

     echo '<hr><h2  class="display-4
      text-center">Concaténation</h2><hr>';

      $x = 'Bonjour ';
      $y = 'Tout le monde !!';
      echo $x . $y . '<br>'; // point de concaténation que l'on peut
    // traduire par 'suivi de'
      echo"$x $y <br>"; // entre guillments, les variables sont
    // évaluées
      echo'$x $y <br>'; // entre simple quotes, les variables ne sont
    // pas évaluées, c'est une chaine de cractére
      echo'aujord\'hui <br>'; // si il y aune apostrophe dans la chaine
    // de cractére , nous placon un antislash pour dire que c'est bien
    // une apostrophe
      echo"aujourd'hui <br>";
      echo "Hey ! " . $x . $y . '<br> '; // concaténation texte et
    // variable
      echo "<br>" , "coucou" , "<br>"; // concaténation avec une
    // virgule (la viregule et le point de concaténation sont similaire)  

    echo '<hr><h2  class="display-4 text-center">Concaténation lors
    de l\affection</h2><hr>';

    $prenom1 = "Bruno";
    $prenom1 = 'Claire';
    echo $prenom1 . '<br>'; // cela remplace "Bruno" par Claire 
    //donc affiche Claire

    
    $prenom2 = "Nicolas";
    $prenom2 .= " Marie"; // .= ajoute une variable sans remplace la précedante
    echo $prenom2 . '<br>'; // cela ajoute sans remplacé la valeur
    // présedente grace a l'opér    teur .= , affiche 'Nicolas Marie'

    echo '<hr><h2  class="display-4 text-center">Constante et
    constante magique</h2><hr>';
    // Une constante tout comme variable permet de conserver une
    // mais comme son nom l'indique, la v   leur est..
    //  constante!! On ne pourra pas changer sa valeur durant
    // l'execution en majuscule
    define("CAPITALE", "Paris");// Par convontion, une constante
    // se déclare toujour en majuscule
    // define("CAPITALE", "Paris")
    echo CAPITALE . '<br>';

    define("CAPITALE", "Rome"); 
    //    define("CAPITALE", "Rome"): /!\ erreur !! il n'est pas
    // possible de redéclarer une constante  deja define

    // constante magique
    echo __FILE__ . '<br>';
    echo __LINE__ . '<br>';
    // __FONCTION__ / __CLASS__ / __METHODE__

   // Exo : afficher vert-jaune-rouge (avec les tirets) en mettant
   // chaque couleur dans une variable, faites en sorte que chaque
   // mot soit de la bonne couleur
    $vert = '<span class="text-success">vert</span>';
    $jaune = '<span class="text-warning">jaune</span>';
    $rouge = '<span class="text-danger">rouge</span>';
    // $rouge = '<span class="text" style="color:red">rouge</span>

    echo"$vert-$jaune-$rouge<br>";
    echo $vert . '-' . $jaune .  '-' . $rouge . '<br>'; 

    echo '<hr><h2  class="display-4 text-center">Opérateurs
    arithmetique</h2><hr>';
    $a = 10; $b =2;

    echo $a + $b . '<br>'; // affiche 12
    echo $a - $b . '<br>'; // affiche 8
    echo $a * $b . '<br>'; // affiche 20
    echo $a / $b . '<br>'; // affiche 5 

    // opération / affection
    $a += $b; // equivaut a $a = $a + $b
    echo $a . '<br>'; // affiche 12
    $a -= $b; // equivaut a $a = $a + $b
    echo $a . '<br>'; // affiche 
    $a *= $b; // equivaut a $a = $a + $b
    echo $a . '<br>';
    $a /= $b; // equivaut a $a = $a + $b
    echo $a . '<br>';

    echo '<hr><h2  class="display-4 text-center">Structures
    conditionnelles (if / else) - opérateurs de
    comparaison</h2><hr>';

    // insset & empty
    $var1 = 0;
    $var2 = '';
    // empty test si une variable est a 0, si elle vide ou nom
    // definie
    // Si la condition entre les paranthése du IF est verifiée, si
    // elle retourne 'true', le code entre les accolades sera exécutée
    if(empty($var1))
    {
        echo "0, vide ou non definie<br>";
    }
    // ----------------------------------------
    // isset test l'existance d'une variable
    if(isset($var2))
    {
        echo "var2 existe et est definie par rien<br>";
    }

    /* 
    OPERATEUR DE COMPARAISON
    *       égal a
    ==      comparaison de la valeur
    ===     comparaison de la valeur est du type
    <       strictement inférieur a
    >       strictement supérieur a
    <=      inférieur ou égal a
    >=      supérieur ou egal a
    !       n'est pas
    !=      différent de
    || OR   ou
    && AND  et
    XOR     condition exclusive
    */
    
    $a = 10; $b = 5; $c =2;
    if($a > $b)
    {
        echo "A est bien supérieur a B<br>";
    }
    else // cas par défaut , dans tout les autre cas, 
    {
        echo "non c'est B qui est supérieur a B<br>";
    }
    // if / elseif / else

    if($a > $b && $b >$c)

    {

    echo "ok pour les deux conditions <br>";

    }
    elseif ($a == 9 || $b > $c)
    {
    echo "ok pour au moins une des 2 conditions";
    }
    // ELSEIF permet d'ajouter des cas supplémentaire a la
    // condition

    else

    {
   echo "tout le monde a faux !! <br>";
    }



    // condition exclusive
    if($a == 10 XOR $b == 0)
    {
    echo "ok condition exclusive '<br>";
    }


    echo ($a == 10) ? "A est égal a 10<br>" : "A n'est  pas égal a
    10<br>";



    $varA =1;
    $varB = '1';
    if($varA === $varB)
    {
        echo "il s'agit de la méme chose<br>";
    }
    // Avec la présence du triple egal, le test ne fonctionne pas,
    // car les types de variable sont différents. INTEGER n'est pas
    // égal a STRING
    
    echo '<hr><h2 class="display-4 text-center">Condition
    SWITCH</h2><hr>';

    $perso = 'Mario';
    switch($perso)
    {
        case 'Luigi';
            echo "Vous avez choisi $perso<br>";
        break;
        case 'Toad';
            echo "Vous avez choisi $perso<br>";
        break;
        case 'Broser';
            echo "Vous avez choisi $perso<br>";
        break;
        default;
        echo "Vous étes fou !! c'est Mario le 
        meilleur<br>";
        break;           
    }
    // Si on a une grande comparaison de cas, la
    // condition SWITCH est a privilégié
    // 'case' représente les cas dans lesquel si nous
    // pouvons potentiellement tomber
    // 'break' permet de stopper le script si nous
    // tombons dans un des cas

    // Exo pouvez vous faire la méme chose que le switch avec des condition   if / elseif / else
    $perso = "Mario";
    if ($perso == 'Mario')
    {
        echo "Vous avez choisi $perso<br>";
    }
    elseif($perso == 'Luigui')
    {
        echo "Vous avez choisi $perso<br>";   
    }
    elseif($perso == 'Toad')
    {
        echo "Vous avez choisi $perso<br>";   
    }
    elseif($perso == 'Browser')
    {
        echo "Vous avez choisi $perso<br>";   
    }

    echo '<hr><h2 class="display-4 
    text-center">Fonctions prédefinies</h2><hr>';
    // https://www.php.net/
    // Une fonctions prédefinie permet de réaliser 
    //un traitement spécifique

    echo 'DATE : '  .date("d/m/Y") . '<br>';
    // Lorsque l'on utilise une ofnctions prédefinie,
    // il faut toujours se poser la question, a
    // savoir ce qu'on doit lui envoyer comme
    // arguments et surtout savoir ce qu'elle retourne
    // les arguments de la fonction date() ne
    // sortent pas de nul part, on les retrouvent sur 
    // la documentation

    echo '<hr><h2 class="display-4 
    text-center">traitments des chaines
    (iconv_strelen, strpos, substr</h2><hr>';

    // strpos
    $email = "nelson.vanicatte@lepoles.com";
    echo strpos($email, "@");
    /*
        strpos() : string position / fonction
        prédéfinie qui permet de trouver la
        position d'un caractére dans une chaine
        arguments :
        1 - la chaine dans la quelle nous 
        souhaitons cherchez
        2 - le cractére a trouvé
        contexte : utilise pour verifier le format
        d'un email
    */

    $email2 = "Bonojur";
    echo strpos($email2, "@"); // cette ligne ne
    // sort rien pourtant il y a bien qulque chose a l'intérieur
    // : False !
    var_dump(strpos($email2, "@")); // grace a
    // var_dump on apercoit le FALSE. var_dump()
    // est un donc une instruction d'affichage
    // ameliorée que l'on utilise régliérement en
    // phase de développement
    // il en existe une autre : print_r()

    // iconv_strlen()
    $phrase = "Mettez une phrase ici a cet
    endroit";
    echo iconv_strlen($phrase) . '<br>';
    // iconv_strlen() est une fonction prédéfinie
    // qui permet de calculer la taille d'une chaine
    // de cractére
    // Context : nous pourrions l'utiliser pour
    // savoir si le pseudo et le mdp lors d'une
    // inscription ont des tailles conforme
    
    // substr()

    $texte = "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem
    On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem";
    echo substr($texte, 0, 20). "<a href=''>Lire
    la suite</a>";
    
    /*
    substr() est une ofnction prédéfinie
    permmetant de retouner uune partie de la 
    chaine
    arguments : 
    1 - la chaine a couper
    2 - la position de début
    3 - la position de fin
    context : substr est souvent utilisé pour
    afficher des actualitées avec une accroche
    */

    
    echo '<hr><h2 class="display-4 
    text-center">Fonctions utilisateur</h2><hr>';
    // Les ofnctions utilisateur permettent
    // d'eviter de copier / coller un code récurant,
    // on l'encapsule dans une fonction

    // on déclare toujours une fonction avec le
    // mot clé 'function' suivi du nom de la fonction
    // que nous définissons
    function separation() // toujours des
    // parenthése, une fonction peut potentiellment
    // recevoir des arguments 
    {
        echo "<hr><hr><hr>";
    }
    separation(); // execution de la fonction

    // fonction avec arguments
                    // Nelson
    function bonjour($qui)
    {                    // Nelson
        return "Bonjour $qui <br>"; // return
        // retourne le résultat de la fonction, a ce
        // moment  la on quitte la fonciton
    }

    echo bonjour('Nelson'); // execution de la 
    // fonction
    echo bonjour('Etienne'); // quand il y a un
    // 'return' dans la ofnction, il faut faire un
   // echo avant 
    
   $prenom = 'Jaques';
   echo bonjour($prenom); // l'argument peut etre
   // une variable

   //-----------------------
                        // 500
   function appliqueTva ($nombre)
   {        // 500
       return $nombre*1.2;
   }
   echo "500 euros avec tva 20% font : " .
   appliqueTva(500) . '<br>';

   // Exo : pourriez vous améliorer cette
   // fonction afin que l'on puisse calculer un
   // nombre avec le taux de notre choix (19.6%,
   //5.5%; 7% etc..)
   // 1 + taux / 100

   /*function appliqueTva2($nombre2)
   {
       return $nombre2*1.196;
   }
   echo "1000 euros avec une tva de 19,6% font : " .
   appliqueTva2(1000) . '<br>';

   function appliqueTva3($nombre2)
   {
       return $nombre2*1.055;
   }
   echo "1000 euros avec une tva de 5,5% font : " .
   appliqueTva3(1000) . '<br>';

   function appliqueTva4($nombre2)
   {
       return $nombre2*1.070;
   }
   echo "1000 euros avec une tva de 7% font : " .
   appliqueTva4(1000) . '<br>';
   */
   function appliqueTva2($nombre, $taux)
   {
       return $nombre*(1+$taux/100);
   }
   echo "500 euros avec tva 19,6% font : " .
   appliqueTva2(500, 19.6) . '€<br>';
   echo "500 euros avec tva 7% font : " .
   appliqueTva2(500, 7) . '€<br>';
   echo "500 euros avec tva 5,5% font : " .
   appliqueTva2 (500, 5.5) . '€<br>';

   // -----------------------------
   echo meteo("été", 20); // il est possible
   // d'executer une ofnction avant qu'elle soit
   // déclarée dans le code
   function meteo($saison, $temperature)
   {
       return "nous sommes en $saison et il fait
       $temperature degre(s)<br>";
   }

   // Exo : gérer le S de degréS en fonction de 
   // la temperature , pensez a gérer les articles :
   // "en" été / "au" printemps
   function exoMeteo($saison, $temperature)
   {
       if($temperature > 1 || $temperature < -1)
            $degre = "degrés";
       else
       $degre = "degré";
       // ------------------------
       if($saison == 'printemps')
            $art = 'au';
        else
            $art = 'en';      
  
   return "nous sommes  $art $saison et il fait
       $temperature $degre<br>";
   }
   echo '<br>';
   echo exoMeteo('été', 2);
   echo exoMeteo('automne', -2);
   echo exoMeteo('hiver', 0);
   echo exoMeteo('printemps', 1);
   echo exoMeteo('printemps', 1);

   // Espace global et local
   function jourSemaine()
   { // espace local
       $jour = "Jeudi";
       return $jour;
       echo 'Allo!!';
   }

   echo $jour; // \!/ ne fonctionne pas car cette
   // variable n'est connue qu'a l'intérieur de la
     //fonction
     // Il n'est pas possibke d'appeler une 
     // variable déclarée dans l'espace local (dans
    // une ofnciton) vers l'espace global (espace
    // par défaut du php
    $recup =jourSemaine();
    echo $recup . '<br>';

    // -----------------------------------
    $pays = 'France'; // variable global
    
    function affichagePays()
    {   global $pays; // global permet d'importer
        // une variable déclarée dans l'espace global
        // vers l'espace local (dans une fonction)
        return $pays;
    }
    echo affichagePays();

    echo '<hr><h2 class="display-4 text-center">Structure itérative :
     Boucle</h2><hr>';

     // Boucle while
     $i =0;
        // 4
     while($i < 5){
         echo "$i---";
            // 4
         $i++; // equivanut a $i = $i + 1
     }
     echo"<br>";
     
     // 0---1---2---3---4---

     // Exo : faites en sorte de ne pas avoir les tirets a la fin :
     $j = 0;
     while($j < 5){

         if($j == 4)
         echo"$j";
         else
         echo "$j---";
         $j++; // equivanut a $i = $i + 1
     }
     echo "<br>";

     $s = 0;
     while($s < 5){

         if($s !== 4)
         echo"$s---";
         else
         echo $s;
         $s++; // equivanut a $i = $i + 1
     }
     echo "<br>";
     //---------------------------------------
     // la boucle FOR
     for($a = 0; $a <16; $a++)  // initialisation / 
    {
        echo $a;
    }
    // --------------------------------------
    // Exo : afficher un selecteur de 30 option via une boucle
    echo '<hr><select>';
    for($i = 0; $i < 31; $i++)
    {
        echo "<option>$i</option>";
    }
        echo    '</select><br>'; 

        // Exo : Faites une boucle qui affiche de 0 a 9 sur la meme ligne
        // soit 10 tours)

        for($b = 0; $b <10; $b++)
        {
            echo "$b-";
        }
        //---------------------------------------------------
        // Exo : faites une boucle qui affiche de 0 a 9 sur la meme ligne
        // dans un tableau php

        echo '<table class="table table-bordered text-center"></tr>';
        echo'<tr';
        for($v = 0; $v < 10; $v++)
        {
            echo "<td>$v</td>"; // on crée un option par tour de boucle
            // avec la valeur de $v dans chaque cellule
        }
        echo '</tr>';
        echo '</tr></table>';

        // ---------------------------------
        // Exo : faites la meme chose en alant de 0 a 99 sur plusieurs
        // ligne sans faire de boucle
        $compteur = 0;
        // la premiére boucle FOR tourne 10 fois parce qu'il y a 10 ligne
        // la deuxiéme boucle For tourne 10 fois sur chaque ligne et crée
        // une cellule
        // $compteur permet d'avoir une variable qui qui ne se reinitialise
        // jamais a zéro, elle augment de 1 qulque soit le tour de boucle
         echo '<table class="table table-bordered text-center">';
      
         for($ligne = 0; $ligne < 10; $ligne++)
         {
             echo '<tr>';   
             for($cellule = 0; $cellule < 10; $cellule++)
                           
             {
                 echo "<td>$compteur</td>";
                 $compteur++; 
             }
             echo '</tr>';
         }
         echo '</table>';

         echo '<hr><h2 class="display-4 text-center">Tableau de données
         ARRAY</h2><hr>';
         // Un tableau ARRAY est daclarée un peu comme une variable
         // ameliorée,  car on ne conserve pas qu'une valeur mais un ensemble
        // de valeur

        $liste = array("Nelson", "Aziz", "Nassim, Sylvain", "Nelson");
       // print $liste; /!\erreur !! on ne peut pas afficher un tableau ARRAY
       // en passant par un simple echo

        echo  '<pre>';  var_dump($liste); echo '</pre>';
        echo  '<pre>'; print_r($liste); echo '</pre>';
        // <pre est une balise d'affichages améliorées permettent de
        // consulter et d'afficher les données d'un tableau, 'une variable,
        // d'un objet etc..

        /*
        ------------------
        | indice | valeur |
        ------------------
        | 0 | Gregory |

        */
         // ------------------------------------------------------------
        // Exo : tenter de sortir "aziz" en passant par le tableau de
        // données ARRAY sans faire un 'echo aziz

        echo $liste[1] . '<br>'; // on va chercher a l'indice 1 du
        // tableau ARRAY pour extraire la valeur étant stocké a l'indice 1

        echo '<hr><h2 class="display-4 text-center">Boucle foreah pour
        les tableau de donées ARRAY</h2><hr>';

        $tab[] = 'France';
        $tab[] = 'Angleterre';
        $tab[] = 'Espagne';
        $tab[] = 'Italie';
        $tab[] = 'Portugal';
        // echo $tab; /!\ erreur !!!
        echo  '<pre>'; print_r($tab); echo '</pre>';
          // boucle foreach
          // Lorsqu'il n y a qu'une seul variable, $value parcours la
          // colonne des valeurs du tableau de donnée ARRAY
          // La boucle foreach est un moyen simple de passer en revue
          // un tableau de données ARRAY (aussi les objects : futur chapitre)
       foreach($tab as $value){ // as fait partie du langage et c'est
        // obligatoire, $value est une variable de récéption que nous nommons,
           echo "$value<br>"; // on affiche successivement les élements
           // du tableau 
       }
       echo '<hr>';
       //------------------------------------------------------------
       // foreach : indice + valeur
       // Lorsqu'il et y a 2 variab es, la premiére parcours la colonne des
       
      
       // indices ($key) et l'autre la colonne des valeurs ($value)

       foreach($tab as $key => $value){ // la fléche est obligatoire
        echo   "$key => $value<br>";
       }
    ?>
    <hr>
    <?php foreach($tab as $key => $value): ?>
       
    <?=  $key; ?> => <?= $value;  ?> <br>

    <?php endforeach; ?>
    <!-- for() / endfor -->
    <!-- if() / else: / endif -->
    <!-- while(): / endwhile  -->

    <?php
    // il est possible de définir ses propres indices
    $perso = array("m" => "Mario", "1" => "Luigi", "z" => "Aziz", "n"
    => "Nassim");
    echo '<pre>'; print_r($perso); echo '</pre>';

    echo "taille du tableau : " . count($perso) . '<br>';
    echo "taille du tableau : " . sizeof($perso) . '<br>';
    // siezof et count retourne la taille d'un tableau ARRAY , combien
    // d' éléments il y a l'intérieur. Pas de différence entre les deux

    echo implode(" - ", $perso) . '<br>'; // implode() rst une fonction
    // d'éléments il y a a l'intérieur d'un tableau en une chaine
    //(séparé par un symbol=)

    echo '<hr><h2 class="display-4 text-center">Tableau ARRAY
        multidimensionnel</h2><hr>';
        // Nous parlons de tableau multidimentionnel quand un tableau est
        // contenue dans un autre tableau 

        $tab_multi = array(
            0 => array("nom" => "Macron", "Salaire" => 1),
            1 => array("nom" => "Lacroix", "Salaire" => 15000),
        );

        echo '<pre>'; print_r($tab_multi); echo'</pre>';

        // Exo : tenter de sortir "Macron" en passant par le tableau multi
        // représenté par $tap_multi sans faire un 'echo Macron'
        
       echo $tab_multi[0]['nom'] . '<br>';

       //exo : afficher l'ensemble du tableau multidimentionnel a l'aide de boucles imbriquée foreach

       foreach($tab_multi as $tab){
       
          echo '<div class="col-md-2 offset-md-5 alert alert-succes text-dark mx-auto text-center">';
       
              // Lecture de chaque tableau de chaque ligne
       
           foreach($tab as $key=>$valeur){
       
                      // Affichage des deux élements
       
               echo $key.': '.$valeur.'<br>';
       
          }
       
          echo '</div>';
       
       }
       
       //autre methode
       // La boucle for permet de tournet autant de fois qu'il y a de 
       // lignes dans le tableau multi, donc 2 tour de boucle dans notre cas
       for($i = 0; $i < count($tab_multi); $i++)
       {
       
          echo '<div class="col-md-2 offset-md-5 alert alert-info text-dark mx-auto text-center">';
          // on se sert de la variable $i de la boucle for pour aller
          // crochter a chaque indice du tableau multi et parcourir les 
          //données
       
              // Lecture de chaque tableau de chaque ligne
       
          foreach($tab_multi[$i] as $key=>$valeur)
          {
       
                      // Affichage des deux élements
               echo $key.': '.$valeur.'<br>';
          }
          echo '</div>';
       
       }
       echo '<hr><h2 class="display-4
        text-center">SuperGlobales</h2><hr>';
        // Les sueperglobales sont des variables de type ARRAY, elles sont
        // accessibles de partout, c'est a la fois dans l'espace global et 
        // local, elle permettent de véhiculer des données
        /*
        $_SERVER : véhicule les données lié au serveur
        $_GET : véhicule les données transmit dans l'URL
        $_POST : véhicule les données d'un formulaire
        $_FILES : véhicule les données d'un fichier unploader
        $_COOKIE : véhicule les données d'un fichier cookie
        $_SESSION : véhicule les données d'un session en cours

        elle s'appelent toujours avec le signe $ suivi d'un '_' et
        toujours en majuscule
        */ 
        echo '<pre>'; print_r($_SERVER); echo '</pre>';

     //phpinfo();
     echo '<hr><h2 class="display-4 text-center">Classe et objet</h2><hr>';
     // Un objet est un autre type de données? UN peu a la maniére d'un 
     // ARRAY , il permet de regrouper de informations.
     // cependant , cela va beaucuop plus loin car on peux y declarer
     // des variables (appelée : attribut ou propriété) mais aussi des
     // fonctions (appelée : méthodes).
        // Une class est un peut comme un plan de contrsuction 
        // qui regroupe des données
        // par convention , le nom de la premiére lettre du de la class 
        // est toujours en majuscule
     class Etudiant
     {
         public $prenom = 'Nelson'; // public permet de préciser que
         // l'élément sera accessible de partout (il y a aussi protected et private)
         public $age = 20;
         public function pays()
         {
             return 'France';
         }

     }

     $objet = new Etudiant; // new permet d'instancier la classe Etudiant et d'en faire
     // un objet . $objet est un examplaire de la classe Etudiant, c'est un enfant
     // de la classe
     // pour exploiter les données déclares dasn la classe ,  il faut 
     // créer un instance / un objet de la class

       // on pioche dans un ARRAY avec les crochets '[]' / onp pioche
       // dans un objet 
     echo '<pre>'; var_dump($objet); echo '</pre>';
     echo '<pre>'; var_dump(get_class_methods($objet)); echo '</pre>';

    
     // dans l'objet, cela nous permet d'atteindre la propriété $prenom
     // déclarée
     echo "Je m'appel : " .$objet->prenom . '<hr>';
     echo "Mon age est de : " .$objet->age .  'ans<hr>';
     echo "J'habite en : " .$objet->pays() . '<hr>';


       
       
     
    ?>
    </div>
    </body>
</html>