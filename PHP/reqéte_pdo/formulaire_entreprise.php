
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <title>Formulaire entrprise</title>
</head>
<body>
    <!--
        1. Réaliser un formulaire correspondant a la table 'employes de la BDD
        'entreprise' (sauf id_employes)
        2. Controler en php que l'on receptionne bien  tout les champs du formulaire
        3. Connexion BDD 
        4. Traitement PHP/SQL permettant l'insertion d'un employé a partir du formulaire
    -->
    <body><form class="col-md-4 offset-md-4" method="post" action=""><!-- method
: comment vont circuler les données / action : url de destination -->
 
  <div class="form-group">
    <label for="exampleInputPassword1">prénom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="prenom" name="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name" name="nom">
    <small id="text" class="form-text text-muted"></small>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="sexe" value="m" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   M
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="sexe" value="f" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   F
  </label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Service</label>
    <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Service" name="serv">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date-embauche</label>
    <input type="date" class="form-control" id="exampleInputNom1" placeholder="date-embauche" name="date">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salaire</label>
    <input type="number" class="form-control" id="exampleInputTel1" placeholder="Salaire" name="salaire">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  <?php // Exo 2 :
    echo '<pre>'; print_r($_POST); echo '</pre>';

    // Exo 3 :
    $bdd = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

    echo '<pre>'; var_dump($bdd); echo'</pre>';

    // Exo 4 : 
    if($_POST)
    {
        $resultat = $bdd->exec("INSERT INTO employes (prenom, nom, sexe,service, date_embauche, salaire) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[sexe]' , '$_POST[serv]' , '$_POST[date]', '$_POST[salaire]')");

        echo '<div class="col-md-6 offset-md-3 alert alert-success text-center">L\'employé <strong></strong>' . $_POST['nom'] . '</strong> a bien été enregistré !!</div>';
    }
?>


</form>    
</body>
</html>