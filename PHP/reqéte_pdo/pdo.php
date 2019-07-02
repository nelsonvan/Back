<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2 class="display-4 text-center">01. PDO : Connexion</h2>

    <?php
       // class PDO 
        {
            // méthode (function)
            // propriétées
            // propriétes (variables)
            // public function query()
                // traitment..
        } // connexion BDD : 
        $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', "", array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

    /* 
        PDO est une classe prédefinife en PHP qui permet de se connecter 
        a une base de donnée Cette classe posséde ses propres
        méthodes (fonctions) qui nous permettrons par example de
        formuler et d'executer une requete SQL
        $pdo est l'objet qui permet d'interagir, d'interroger la BDD

        arguments : 1 (serveur + BDD) / 2 (identifiant / 3 (mdp) / 4 (potions PDO)
    */

    echo '<pre>'; var_dump($pdo); echo'</pre>';
    echo '<pre>'; var_dump(get_class_methods($pdo)); echo'</pre>';

    echo '<hr><h2 class="display-4 text-center">02. PDO : EXEC -
   INSERT / UPDATE / DELETE </h2><hr>';
                    // $true n'est pas dédinie 
    if(isset($true)) // permet de plus avoir INSERT a chauque rechargement de page
    {
        $resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUE ('Nelson', 'VANICATTE', 'm', 
        'PDG', '2019-07-09',  30000)");
        echo "Nombre d'enregistrement affecté(s) par l'INSERT : 
        $resultat<br>";
        echo "Dernier ID généré : " . $pdo->lastInsertId() . '<hr>';
    }
  

   /* 
   EXEC() est une méthode issue de la classe prédefinie PDO, elle
   // permet de formuler et executer des requétes SQL, c'est en argument
   (entre les paranthése de la méthode) que l'on envoi la requete 
   EXEC( est prévu pour les requetes ne retournant pas de jeu de 
   resultat 'INSERT / UPDATE / DELETE)
   */

   // UPDATE
   // Exo : réaliser le traitement de modifier le salaire de l'employer
   // n° 350 par 1200

   
   // DELETE
   // Exo : 
   $resultat = $pdo->exec("UPDATE employes SET salaire  = 1200 WHERE id_employes = 350");
   echo "Nombre d\"enregistrement afféctées pour l'UPDATE : 
   $resultat<br>";

   $resultat = $pdo->exec("DELETE  FROM employes WHERE  id_employes = 350");
   echo "Nombre d\"enregistrement afféctées pour l'UPDATE : 
   $resultat<br>";

   echo '<hr><h2 class="display-4 text-center">03. PDO : SELECT +FETCH_ASSOC (1 seul résultat)</h2><hr>';

   /*
   requete selection -> query() -> retour objet PDOStatement
   (inexploatable) 
   ¨Pour exploiter le résultat -> associe une méthode -> fetch() / 
   fetchAll()(classs PDOStatement) --> retourne tableau ARRAY
   Si plusieurs résultats --> boucle !!! 
    */

   $result = $pdo->query("SELECT * FROM employes WHERE id_employes = 415");

   echo '<pre>'; var_dump($result); echo '</pre>';
   echo '<pre>';print_r(get_class_methods($result)); echo '</pre>';
   
   //$employe = $result->fetch(PDO::FETCH_NUM); // retourne un tableau ARRAY indexé numeriquement
   //$employe = $result->fetch(PDO::FETCH_BOTH); // retourne un tableau ARRAY indexé avec le nom des champs et a la fois numeriquement
   $employe = $result->fetch(PDO::FETCH_ASSOC); // retourne un tableau ARRAY indexé avec le nom des champs 
   // Il n'est pas possibled'associer 2 fois la meme methode sur le
   // méme resultat
   echo '<pre>'; var_dump($employe); echo '</pre>';

   // Exo : afficher les information a l'aide d'un affichage 
   // conventionnelle
   echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-success
   text-center">';
   foreach($employe as $key => $value)
   {
    if($key != 'id_employes')
    {
        echo "$key : $value <hr>";
    }
   }
   echo '</div>';
   /* 
   QUERY( est une méthode issue de la classe PDD qui permet de
   formuler et d'executer des requetes SQL. Elle est prévu pour des
   //requetes retournant un jeu de resultat (SELECT)
   Lorsqu'on execute une requete de selection, on obtient tooujours en
   retour un autre objet, issue d'une autre classe : PDOStatment
   Cette classe posséde ses propres propriétées et methode 
   */  
  
  echo '<hr><h2 class="display-4 text-center">04. PDO : QUERY +SELECT + WHILE(plusieurs résultats)</h2><hr>';

  $resultat = $pdo->query("SELECT * FROM employes");

  echo "<pre>"; var_dump($resultat); echo "</pre>";
   // En executant une requete de selection, on obtient en retour un 
   // objet PDOStatment, cet objet est inexploitable en l'etat, on lui 
   // associe donc la methode FETCH qui retourne un tableau 
   // Pour récuper l'ensemble  des employées, dans ce cas précis , 
   // nous sommes obligé de boocler
   // La boucle while permet de dire : tant qu'il y a des employes 
   // on boucle
   // £employes receptionne un tableau ARRAY d'un employé par tour de 
   // boucle
   // PDO::FETCH_ASSOC les '::' pezrmettent de faire appel a une 
  // constante de la classe PDO sans devoir l'instancier
  while($employes =  $resultat->fetch(PDO::FETCH_ASSOC))
{
   // echo "<pre>"; print_r($employes); echo "</pre>";
    echo '<div class="col-md-4 offset-md-4 alert alert-info
    text-center">';
    echo $employes['nom'] . '<hr>'; // pour chaque tour de boucle,
    // donc pour chaque tableau ARRAY, on va crochter aux différents 
   // indices
    echo $employes['prenom'] . '<hr>';
    echo $employes['service'] . '<hr>';
    echo $employes['salaire'] . '<hr>';
    echo '</div>';  
}

    echo '<hr><h2 class="display-4 text-center">05. PDO : QUERY + FETCHALL + FETCH_ASSOC (plusieurs résultats)</h2><hr>';


    $resultat = $pdo->query("SELECT * FROM employes");

    $donnees = $resultat->fetchAll(PDO::FETCH_ASSOC); // fetchAll()
    // retourne un tableau multidimensionnele avec chaque tableau (de
    //chaque employé) indexé numeriqument

    echo '<pre>'; print_r($donnees); echo '</pre>';

    // Exo : afficher successivement les données de chaque employé a l'aide de boucle foreach
    // $tab receptionne un tableau ARRAY d'un employé par tour de
  //  boucle            [nom]  => 'Nelson'
    foreach($donnees as $key => $tab)
    {
        echo '<div class="col-md-4 offset-md-4 alert alert-info
        text-center">';
        foreach($tab as $key2 => $value)
        {
            echo "$key2 : $value <hr>";
        }
        echo '</div>';
    }

    echo '<hr><h2 class="display-4 text-center">06. PDO : QUERY + FETCH + BDD   (plusieurs résultats)</h2><hr>';
    // Exo : afficher la liste des base de données, puis les mettre
    // dans une liste ul li

    $resultat = $pdo->query("SHOW DATABASES");
    echo '<pre>'; print_r($resultat);  echo'</pre>';


    echo '<ul class="list-group">';
    // $data receptionne un tableau ARRAY par tour de boucle contenant 
   // les informations d'une BDD
    while($data = $resultat->fetch(PDO::FETCH_ASSOC))
    {
       //echo '<pre>'; print_r($data);  echo'</pre>';
        
        echo  '<li class="list-group-item">' . $data['Database'] . '</li>'; 
        // on va crochter a l'indice [database] pour afficher le nom de la bdd
    }
    
    echo '</ul>';

    echo '<hr><h2 class="display-4 text-center">07. PDO : QUERY + TABLE  (plusieurs résultats)</h2><hr>';
    $resultat = $pdo->query('SELECT * FROM employes');

    /* 
    columnCount() est une méthode issue de la classe PDOStatment
    qui retourne le nombre de colonne selectionnées via la requete
    de selection, dans notre cas retourne integer 7, donc la
    boucle for tourne 7 fois ,autant de fois qu'il y a de colonnes

    getColumnMeta() est une méthode issue  de la classe PDOStatment
    qui permet de recolter les information des champ/colonne
    selectionnées
    */
    echo '<table class="table table-bordered text-center"><tr>';
    for($i = 0; $i < $resultat->columnCount(); $i++)

    {   $colonne = $resultat->getColumnMeta($i);
        echo '<pre>'; print_r($colonne);  echo'</pre>';
        echo "<th>$colonne[name]</th>";
    }
    
    
   echo '</tr>'; 
   // employe receptionne un tableau ARRAY par employes par tour de boucle
   while($employe = $resultat->fetch(PDO::FETCH_ASSOC))
   {
    echo '<pre>'; print_r($employe);  echo'</pre>';

    echo '<tr>';
    // la boucle foreach permet de parcourir chaque tableau ARRAY 
   // de chaque employé
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
   echo '</tr>';
   }
    echo '</table>';

    // Exo : faire la meme methode en utilisant la méthode fetchAll
   
   $resultat = $pdo->query("SELECT * FROM employes");
   $employes = $resultat->fetchAll(PDO::FETCH_ASSOC);

   echo '<pre>'; print_r($employes); echo'</pre>';

   echo '<table class="table table-bordered text-center"><tr>';
   foreach($employes[0] as $key => $value)
   {
        echo "<th>$key</th>";

   }
   echo '</tr>';
   // $tab contient un ARRAY d'un employé par tour de boucle 
   foreach($employes as $tab)
   {
        echo '</tr>'; // crée une ligne par employé 
        // la boucle foreach permet de parcourir chaque tableau ARRAY
       // de chaque employée
        foreach($tab as $infos)
        {
            echo "<td>$infos</td>";
        }
   }
   echo '</table>';

   echo '<hr><h2 class="display-4 text-center">08. PDO : PREPARE + BINDVALUE + EXECUTE (plusieurs résultats)</h2><hr>';
   // les requetes préparées permettent de formuler une seul fois 
  // la requete et de l'execute autant de fois que souhaité
  // les requetes prépares permettent de parer aux injections SQL,
 // cela permet de protéger les requétes SQL
  // 3 cycles dans une requete : analyse / interprétation / execution

  $resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom"); // ici on prépare la requete mais a aucun moment on l'execute
  // :nom --> marqeur nomiatif que l'on peux comparer a une boite 
  // ou un tampon
  echo '<pre>'; print_r($resultat); echo '</pre>'; 
  $resultat->bindValue(':nom', 'Gallet', PDO::PARAM_STR); // blindValue
  // () méthode PDOStatement. Elle permet d'associer une valeur au
 // marqeur nominatif ':nom'
 // arguments BlindValue(nom_du_marqueur, valeur, type)
 // A ce stade la requete n'a toujours pas été executée
 $resultat->execute(); // méthode PDOStatement / permet d'executer
 //la requets préparé
 echo '<pre>'; print_r($resultat); echo '</pre>';

 $donnes = $resultat->fetchAll(PDO::FETCH_ASSOC);
 echo '<pre>'; print_r($donnes); echo '</pre>';


 // Exo : afficher le resultat de la requete préparée a l'aide de
 // méthode et boucle 
 echo '<div class="col-md-4 offset-md-4 alert alert-info
        text-center">';
 foreach($donnes[0] as $key => $value)
 {
    echo "$key : $value<hr>";
 }
 echo '</div><hr>';

 $nom = 'Dubar';
 $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
 $resultat->execute();
 $employe = $resultat->fetch(PDO::FETCH_ASSOC);
 echo '<pre>'; print_r($employe); echo '</pre>';


  



    ?>
    
    </div>
</body>
</html>