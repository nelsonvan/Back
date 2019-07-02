<?php
// BDD

//
echo '<pre style="background:black;color:#fff;">';
echo var_dump($_POST);
echo '</pre>';
//var de msg
$titreError = "";
$adresseError = "";
$villeError = "";
$cpError = "";
$surfaceError = "";
$prixError = "";
$typeError = "";
$msgSuccess = "";
// // Lors de l'enregistrement d'image / photo, nous aurons besoins du chemin physique complet pour enregistrer la photo dans le bon fichier
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/Back/eval/eval_php_nelson_vanicatte/exercice_2_et_3.php/');

// Enregistrement des photos en BDD 
define("URL", "http://localhost/Back/eval/eval_php_nelson_vanicatte/exercice_2_et_3.php/");
// verif formulaire
extract($_POST);
if ($_POST) {
    // 1 - JE VERIFIE MES CHAMPS
    if (empty($titre) || iconv_strlen($titre) < 2 || iconv_strlen($titre) > 70) {
        $titreError .= '<small class="text-danger">**Saisissez un prenom entre 2 et 70 caractères</small>';
    }
    if (empty($adresse) || iconv_strlen($adresse) < 2 || iconv_strlen($adresse) > 120) {
        $adresseError .= '<small class="text-danger">**Saisissez un nom entre 2 et 120 caractères</small>';
    }
    if (empty($ville) || iconv_strlen($ville) < 4 || iconv_strlen($ville) > 70) {
        $villeError .= '<small class="text-danger">**Saisissez entre 4 et 70 caractères</small>';
    }
   
   if(iconv_strlen($_POST['cp']) !== 5 || !is_numeric($_POST['cp']))
   {
       $cpError .= '<small class="text-danger"> Le format du code postal
       n\'est pas valide</small>';

   }
   if(!is_numeric($_POST['surface']))
   {
       $surfaceError .= '<small class="text-danger"> Le format de la surface 
       n\'est pas valide</small>';

   }
   if(!is_numeric($_POST['prix']))
   {
       $prixError .= '<small class="text-danger"> Le format du prix 
       n\'est pas valide</small>';

   }

   //2 - J'innsert EN BDD SI JE N' AI PAS DE MESSAGE d'ERREUR
   if (empty($ $titreError) && empty($adresseError) && empty($villeError) && empty($cpError) && empty($surfaceError) && empty($prixError)) {

    //2-1 JE ME CONNECT a MA BDD
    $bdd = new pdo(
        "mysql:host=localhost;dbname=immobilier",
        'root',
        '',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        )
    );
    // 2.1 J'INSERT EN BDD
    $newLogement = $bdd->prepare("INSERT INTO logement (titre, adresse, ville, cp, surface, prix,  photo, type, description) VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)");

    foreach ($_POST as $key => $value)
    {
        $newLogement->bindValue(":$key", $value, PDO::PARAM_STR);
    } 

   $newLogement->execute(); 

    
    //3 J'AFFICHE LE MESSAGE DE SUCCES
    $msgSuccess .= '<div class="alert alert-success">Le logement à bien été enregistré. </div>';
    



    } // fin  du if(empty)
    

} // fin du If($_POST)  






 


  
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <title>Document</title>
    <style>
      body{
        background-color: #6899e8;
      }
    
    </style>
</head>
<body>
<form class="col-md-4 offset-md-4" method="post" action="affichage_logement.php"><!-- method
: comment vont circuler les données / action : url de destination -->
    <?php echo $msgSuccess ?>
  <div class="form-group">
    <?php echo $titreError ?>
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre">
  </div>
  <div class="form-group">
    <?php echo $adresseError ?>
    <label for="adresse">Adresse</label>
    <input type="adresse" class="form-control" id="exampleInputAdresse1" placeholder="Adresse" name="adresse">
  </div>
  <div class="form-group">
    <?php echo $villeError ?>
    <label for="ville">Ville</label>
    <input type="ville" class="form-control" id="exampleInputVille" placeholder="Ville" name="ville">
  </div>
  <div class="form-group">
    <?php echo $cpError ?>
    <label for="cp">Cp</label>
    <input type="code-postal" class="form-control" id="cp" placeholder="Cp" name="cp">
  </div>
  <div class="form-group">
    <?php echo $surfaceError ?>
    <label for="surface">Surface</label>
    <input type="text" class="form-control" id="surface" aria-describedby="emailHelp" placeholder="Surface" name="surface">
    <!-- il ne faut surtout pas oublier les attributs name sur le formulaire html, sinon aucune données saisie
    ne sera récupérer en PHPH -->
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <?php echo $prixError ?>
    <label for="prix">prix</label>
    <input type="text" class="prix" id="prix" placeholder="prix" name="prix">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control-file" id="photo"  name="photo">
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" id="type" placeholder="Type" name="type">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
  </div>
 
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>