<?php
require_once('init.php');


//echo '<pre>'; print_r($_POST); echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="ajax6.js"></script>
  
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="display-5 text-center">AJAX SELECT ID</h1><hr>




<div id="resultat">
  <?php $result = $bdd->query("SELECT * FROM employes"); ?>
  <table class="table table-bordered text-center table-dark" ><tr>
      <?php for($i = 0; $i < $result->columnCount(); $i++): $colonne = $result->getColumnMeta($i); ?>

      <th><?= $colonne['name'] ?></th>

      <?php endfor; ?>

  </tr>
  <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>
  <tr>
      <?php foreach($employes as $value): ?>
          <td><?= $value ?></td>

      <?php endforeach; ?>
  </tr>

      <?php endwhile; ?>

  </table>
</div>
<div id="message">

</div>
<form class="col-md-4 offset-md-4" method="post" id="form1">
<div class="form-group">

    <label for="exampleInputPassword1">Prénom</label>
    <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Nom" name="nom">
    <!-- il ne faut surtout pas oublier les attributs name sur le formulaire html, sinon aucune données saisie
    ne sera récupérer en PHPH -->
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Sexe</label>
    <select class="form-control" id="sexe">
      <option value="f">femme</option>
      <option value="m">masculin</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Service</label>
    <input type="text" class="form-control" id="service" placeholder="Service" name="service">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Date Embauche</label>
    <input type="date" class="form-control" id="date_embauche" placeholder="date_embauche" name="date_embauche">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salaire</label>
    <input type="number" class="form-control" id="salaire" placeholder="salaire" name="salaire">
  </div>
 
  <div>
  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
  </div>
</form>




</div>
    
</body>
</html>