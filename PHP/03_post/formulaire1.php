<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire 1</title>
</head>
<body>
<!-- Exo : réaliser un formulaire HTML avec les champs suivants :
email, mot de passe et un bouton submit -->
<h1 class="diplay-4 text-center">Formulaire 1</h1>
<?php
  echo '<pre>'; print_r($_POST); echo '</pre>'; // permet d'observer les 
  // données saisie dans le formulaire qui vont cse stocker directement dans 
  // la superglobales $_POST, les indices correspondent aux attributs 'name'
  // du formulaire HTML

  // Exo : afficher les données saisie dans le formulaire en passant par 
  // la superglobal $_POST avec un affichage conventionnelle (sans
 // print_r ou var_dump)

 
// on parcours la superglobale $_POST de 
//type ARRAY avec une boucle foreach
 foreach($_POST as $indice => $value)
 {
  echo "$indice => $value<br>";
 }
 echo '<hr>';
// on extrait les valeurs une par une en 
// passant par le superglobales $_POST en 
// crochetant aux différents indices

// dans la conditon IF, au premier
// chargement de la page, nous avons 2 erreurs
// 'undefined', c'est du au fait que le 
// formulaire n'a pas été validé et donc les 
// indices 'email' et 'mdp' ne sont pas reconunu

// Si la condition IF est verifié , si elle //
// revoi 'true', cela veut dire que l'on a
// soumit le formulaire et les indices 'email'
// et 'mdp' sont bien détéctes
if($_POST)
{
  echo "Email : $_POST[email]<br>";
 echo "Mot de passe : " . $_POST['mdp'] . "<br>";

 
}




  
?>
<form class="col-md-4 offset-md-4" method="post" action=""><!-- method
: comment vont circuler les données / action : url de destination -->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <!-- il ne faut surtout pas oublier les attributs name sur le formulaire html, sinon aucune données saisie
    ne sera récupérer en PHPH -->
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>