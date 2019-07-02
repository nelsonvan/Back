<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- lien css -->
    <title>Document</title>
</head>
<body>
<form class="col-md-4 offset-md-4" method="post" action=""><!-- method
: comment vont circuler les données / action : url de destination -->
 
  <div class="form-group">
    <label for="exampleInputPassword1">pseudo</label>
    <input type="pseudo" class="form-control" id="exampleInputPassword1" placeholder="pseudo" name="pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <!-- il ne faut surtout pas oublier les attributs name sur le formulaire html, sinon aucune données saisie
    ne sera récupérer en PHPH -->
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ConfirmPassword</label>
    <input type="Password" class="form-control" id="exampleInputConfirmPassword1" placeholder="ConfirmPassword" name="confmdp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="nom" class="form-control" id="exampleInputNom1" placeholder="nom" name="nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="téléphone" class="form-control" id="exampleInputTel1" placeholder="Téléphone" name="tel">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Adresse</label>
    <input type="adresse" class="form-control" id="exampleInputAdresse1" placeholder="Adresse" name="ad">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ville</label>
    <input type="ville" class="form-control" id="exampleInputVille" placeholder="Ville" name="ville">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Code_patental</label>
    <input type="Code_parental" class="form-control" id="exampleInputCode_parental" placeholder="Code_parental" name="cp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sexe</label>
    <input type="Sexe" class="form-control" id="exampleInputSexe" placeholder="Sexe" name="sexe">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>