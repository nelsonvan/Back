<?php
$bdd = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

if($_POST)
{
    echo '<pre>'; print_r($_POST); echo '</pre>';

    $resultat = $bdd->exec("INSERT INTO annuaire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[telephone]', '$_POST[profession]', '$_POST[ville]', '$_POST[codepostal]', '$_POST[adresse]', '$_POST[date_de_na
    
    
    
    ssance]', '$_POST[sexe]', '$_POST[description]')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet"> 
    <title>Document</title>
    <style>
        body{
            background-color: #7b7b84;
            font-family: 'Source Code Pro', monospace;
        }
    
    </style>
</head>
<body><form class="col-md-4 offset-md-4" method="post" action=""><!-- method
: comment vont circuler les données / action : url de destination -->
    <div class="form-group">
    <label for="nom">Nom</label>
    <input type="nom" class="form-control" id="exampleInputNom1" placeholder="nom" name="nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="prénom" class="form-control" id="exampleInputPrenom1" placeholder="Prénom" name="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="téléphone" class="form-control" id="exampleInputTel1" placeholder="Téléphone" name="telephone">
  </div>
  <div class="form-group">
    <label for="Profession">Profession</label>
    <input type="pseudo" class="form-control" id="profession" placeholder="Profession" name="profession">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Ville</label>
    <input type="ville" class="form-control" id="exampleInputVille" placeholder="Ville" name="ville">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CodePostal</label>
    <input type="CodePostal" class="form-control" id="exampleInputCode_parental" placeholder="CodePostal" name="codepostal">
  </div>
  <div class="form-group">
    <label for="Adresse">Adresse</label>
    <input type="text" class="form-control" id="exampleInputAdresse1" placeholder="Adresse" name="adresse">
  </div>
  <div class="form-group">
    <label for="date-de-naissance">Date-de-naissance</label>
    <input type="date" class="form-control" id="Date-de-naissance" placeholder="Date-de-naissance" name="date_de_naissance">
  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <select class="form-control" id="exampleFormControlSelect1" name="sexe">
      <option value="f">Femme</option>
      <option value="h">Homme</option>
      <option value="mixte">Mixte</option>
    </select>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
