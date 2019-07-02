<?php




if($_POST)
{
  echo '<pre>'; print_r($_POST); echo'</pre>';

}
?>
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

<form class="col-md-6 offset-md-3" method="post" action="Exo_1.3_repertoire.php">
<div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control col-md-12" id="pseudo" placeholder="pseudo" name="pseudo">
  </div>
 <div class="form-group">
    <label for="nom">nom</label>
    <input type="text" class="form-control col-md-12" id="nom" placeholder="nom" name="nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control col-md-12" id="prenom" placeholder="Prenom" name="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Adresse</label>
    <input type="Adresse" class="form-control col-md-12" id="exampleInputAdresse" placeholder="Adresse" name="adresse">
  <div class="form-group">
    <label for="confmdp">Ville</label>
    <input type="textarea" class="form-control col-md-12" id="ville" placeholder="ville" name="ville">
  </div>
  <div class="form-group">
    <label for="code-postale">Code-postale</label>
    <input type="nom" class="form-control col-md-12" id="code-postale" placeholder="code-postale" name="cp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Civilité</label>
    <select class="form-control" name="civilite">
  <option value="m">M</option>
  <option value="f">F</option>
  </select>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>