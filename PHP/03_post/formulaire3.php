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
    <!-- Réaliser un formulaire HTML (pseudo, email) en récupérant les
    données directement sur la page formulaire.php -->
    <form class="col-md-4 offset-md-4" method="post" action="formulaire4.php"><!-- method
: comment vont circuler les données / action : url de destination -->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <!-- il ne faut surtout pas oublier les attributs name sur le formulaire html, sinon aucune données saisie
    ne sera récupérer en PHPH -->
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">pseudo</label>
    <input type="pseudo" class="form-control" id="exampleInputpseudo1" placeholder="Pseudo" name="pseudo">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
  $_POST = fopen("c:\\formulaire3.php\\formuulaire3.txt", "r");
?>
</body>
</html>