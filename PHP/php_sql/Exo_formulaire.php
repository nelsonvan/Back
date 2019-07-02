<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exo formulaire</title>
</head>
<body>
<form class="col-md-4 offset-md-4" method="post" action=""><!-- method
: comment vont circuler les données / action : url de destination -->
  <div class="form-group">
    <label for="exampleInputPrénom1">Prénom</label>
    <input type="prénom" class="form-control" id="exampleInputPrénom" placeholder="Prénom" name="Pn">
  </div>
  <div class="from-group">
    <label for="exampleInputNom">Nom</label>
    <input type="nom" class="from-control" id="exampleInputNom" placeholder="Nom" name="Nom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="text" class="from-control" id="exampleInputEmail" placeholder="Email" name="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputAdresse">Adresse</label>
    <input type="Adresse" class="from-control" id="exampleInputAdresse" placeholder="Adresse" name="Add">
  </div>
  <div class="form-group">
    <label for="exampleInputCod_epostal">Code postal</label>
    <input type="Code_postal" class="from-control" id="exampleInputCode_postal" placeholder="Code_postal" name="Cp">
  </div>
  <div class="form-group">
    <label for="exampleInputGenre1">Genre</label>
    <input type="Genre" class="form-control" id="exampleInputGenre" placeholder="Genre" name="Genre">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php
  echo '<pre>'; print_r($_POST);  echo '</pre>';
  $error ="";
  if($_POST)
  {
  
  if(iconv_strlen($_POST['Pn']) < 4 || iconv_strlen($_POST['Pn']) >  15 ) 
  {
    echo '<div class="col-md-4 offset-md-4 alert alert-danger
    text-center text-dark">Le prénom doit contenire
   entre 4 et 15 caractéres
    </div>';
  } // fin du if

  if(empty($_POST['Nom']))
  {
      echo '<div class="col-md-4 offset-md-4 alert alert-danger
      text-center text-dark">Merci de remplire le champ
      </div>';
  } // fin du if 

  if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
  {
      echo '<div class="col-md-4 offset-md-4 alert alert-danger
      text-center text-dark">Le format de l\'email n\'est 
       pas correct
      </div>';  
  } // fin du if
  if(iconv_strlen($_POST['Add']) < 5 || iconv_strlen($_POST['Add']) > 30)
  {
    echo '<div class="col-md-4 offset-md-4 alert alert-danger
    text-center text-dark">l\'Adresse doit contenire entre 5 et 25 cractéres 
    </div>';
  }
  if(iconv_strlen($_POST['Cp']) !== 5 || !is_numeric($_post['Cp'])  )


}
 
  ?>
</body>
</html>