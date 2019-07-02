<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire fruits</title>
</head>
<body>
    <!--
     1. réaliser un formulaire HTML permettantde séléctionner un fruit 
     (liste deroulante) et de saisir un poids (champs input)   
     2. Traitement permettant d'afficher le prix en passant par la fonction
     déclarée 'calcul'
     3. Faire en sorte e garder le dernier fruit selectionné et le dernier 
     poids saisie dans le formulaire lorsque celui ci est validé
      -->
      <form class="col-md-4 offset-md-4"  method="post" action="">
      <div class="form-group">

    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1" name="fruit">
    <!--  -->
      <option  value="cerises"<?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'cerises') echo 'selected'  ?>>Cerises</option>
      <option value="bananes" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'bananes') echo 'selected'  ?>>Bananes</option>
      <option  value="pommes" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'pommes') echo 'selected'  ?> >Pommes</option>
      <option  value="peches" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'peches') echo 'selected'  ?>>péches</option>
    </select>
    </div>
    <div class="form-group">
        <label for="poids">Poids</label>
        <input type="text" placeholder="Enter poids" name="poids" value="<?php if(isset($_POST['poids'])) echo $_POST['poids']; ?>">
    </div>
    <button type="submit" class="col-md-12 btn btn-dark mb-4">Calcul</button>
   

   <?php
     echo '<pre>'; print_r($_POST); '</pre>';

   require_once("fonction.php");


   if($_POST)
    {
        echo calcul($_POST['fruit'], $_POST['poids']);
    }
   
   ?>
</body>
</html>