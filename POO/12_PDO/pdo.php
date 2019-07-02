
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

echo '<pre>'; print_r($pdo); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>';

echo "<h2 class='diaplay-4 text-center'>Example n° 1 slect + QUERY + FETCH</h2><hr>";

// erroinfo() contient le message d'erreur et les erreurs

//  Exo : Afficher les données de l'employe id 417
extract($_POST);

$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes = 415");
$employe = $resultat->fetch(PDO::FETCH_ASSOC);

echo '<pre>'; print_r($employe); echo '</pre>';

echo '<div class="alert alert-success col-md-4 offset-md-4 text-center text-dark">';

foreach($employe as $key => $value)
{
    echo "$key . $value<hr>";
}
echo '</div>';

echo "<h2 class='diaplay-4 text-center'>Example n° 1 slect + QUERY + FETCHALL</h2><hr>";
// Afficher successivement les données de chaque employe en utilisant la methode fetchALL()


$resultat = $pdo->query("SELECT * FROM employes ");
$employe = $resultat->fetchAll(PDO::FETCH_ASSOC);


echo '<div class="alert alert-success col-md-4 offset-md-4 text-center text-dark">';

foreach($employe as $key => $tab)
{
    foreach($tab as $key2 => $value)
    {
        echo "$key2 . $value<hr>";
    }
  
}
echo '</div>';

$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC); // on demande d'indexer avec le nom des champs quand c'est toujours au stade d'objet

echo '<pre>'; var_dump($resultat); echo '</pre>';

echo '<table class=" table table-bordered text-center table-dark">';
for($i = 0; $i < $resultat->columnCount($i); $i++)
{   
    $colonne = $resultat->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '</tr>';
foreach($resultat as $employe)
{
    echo '<pre>'; print_r($pdo); echo '</pre>';
    echo '<tr>';
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';


// Exo : insérez vous dans la BDD


//  $resultat = $pdo->exec("INSERT INTO employes VALUES (DEFAULT, 'nelson', 'vanicatte', 'm','direction', '2019-04-05', 1000000,)"); 

 $resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = ?"); // on va dans un premier temps "preparer" la reqéte sans la partie variable, que l'on représentra avec marqueur sous forme de point d'interogation

 $resultat->execute(array('Gallet')); // gallet va remplcaer le point d'interogation juste au dessus

 $donnes = $resultat->fetch(PDO::FETCH_ASSOC);
  echo implode($donnes, ' - '); // permet d'extraire les valuer du tableau arrayen chaine de caractére avec un séparateur 

  $resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom "); // déclaration d'un marqueur nominatif 
  $resultat->execute(array("nom" => "Gallet"));//  il est possible d'envoyer directement a l'execution la valeur des marqueurs nominatif

  
 $donnes = $resultat->fetch(PDO::FETCH_ASSOC);
 echo implode($donnes, ' - ');

 echo "<h2 class='diaplay-4 text-center'>PREPARE + ' : ' + FETCH_OBJ</h2><hr>";
// EXO : selectionner a l'aide d'une requete preparé les information de l'employé 'Winter' et afficher ses données a l'aide de la méthode FETCH_OBJ


$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom ");
$resultat->execute(array("nom" => "Winter"));
$donnes = $resultat->fetch(PDO::FETCH_OBJ); // $retorune un objet issu de la classe $tdclass avec chaque iindice propriéte public
echo '<pre>'; print_r($donnes); echo '</pre>';

echo "Prenom : " . $donnes->prenom . '<hr>';

foreach($donnes as $key => $value)
{
    echo "$key . $value<hr>";
}
echo '<hr>';


echo "<h2 class='diaplay-4 text-center'>example n°8 trancition + requete et annulation de celle ci</h2><hr>";

$pdo->beginTransaction();

$resultat = $pdo->exec("UPDATE employes SET salaire = 10000");

echo "Nombre d'enregistrement affecté par l'UPDATE : $resultat";

$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC);
echo "<br><span>Avec le changement</span>";


echo '<table class=" table table-bordered text-center table-dark">';
for($i = 0; $i < $resultat->columnCount(); $i++)
{   
    $colonne = $resultat->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '</tr>';
foreach($resultat as $employe)
{
    // echo '<pre>'; print_r($pdo); echo '</pre>'; 
    echo '<tr>';
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';

// Si on avait voulu valider la transaction, nous aurions pointer sur la méthode 'commit' ---> $pdo->commit(); 

$pdo->rollBack(); // permet d'annuler la transaction et de revenir a l"etat initial 

// Exo : refaite un affichage de la table   



$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC);
echo "<br><span>Avec le changement</span>";


echo '<table class=" table table-bordered text-center table-dark">';
for($i = 0; $i < $resultat->columnCount(); $i++)
{   
    $colonne = $resultat->getColumnMeta($i);
    echo "<th>$colonne[name]</th>";
}
echo '</tr>';
foreach($resultat as $employe)
{
    // echo '<pre>'; print_r($pdo); echo '</pre>'; 
    echo '<tr>';
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';



echo "<h2 class='diaplay-4 text-center'>example n°9 : FETCH_CLASS</h2><hr>";
class Employes
{
    public $id_employes;
    public $prenom;
    public $nom;
    public $sexe;
    public $service;
    public $date_embauche;
    public $salaire;
}

$resultat = $pdo->query("SELECT * FROM employes");
$objet = $resultat->fetchAll(PDO::FETCH_CLASS, "Employes"); // permet de prendre les resultat de la requete et d'afficher les propriéte de l'objet. chaque valeur va étre re-associe  au diiférents prorpiété de la class (il faut pour cela que l'ortographe des nom des colonnes/champs SQL correspondent aux propriété de l'objet)

echo '<pre>'; print_r($objet); echo '</pre>';

foreach($objet as $value)
{
    echo $value->prenom . '<hr>';
}



















        


    
     





?>