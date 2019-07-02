<?php
$bdd = new PDO('mysql:host=localhost;dbname=eleve', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
extract($_POST);
$nomError = '';
$preError = '';
$prtError = '';
$clsError = '';
$telError = '';
$msgValidate = '';
if($_POST)
{
    echo '<pre>'; print_r($_POST); echo '</pre>';

    $resultat = $bdd->prepare("INSERT INTO eleve(nom, prenom, classe, parents, telephone) VALUES (:nom, :prenom, :classe, :parents, :telephone)"); 

    foreach($_POST as $key => $value)
    {
        $resultat->bindValue(":$key", $value, PDO::PARAM_STR);
    
    }
    $resultat->execute();

    
    $resultat = $bdd->query("SELECT * FROM eleve");
    $eleves = $resultat->fetchAll(PDO::FETCH_ASSOC);

    //verif formulaire
    // var de msg
   
    if(empty($nom || iconv_strlen($nom) < 2 || iconv_strlen($nom)>50))
    {
        $nomError .= '<small>Saisissez un prenom entre 3 et 10 caractéres</small>';
    }
    if(empty($prenom) || iconv_strlen($prenom) < 2 || iconv_strlen($prenom)>50)
    {
        $preError .= '<small>Saisissez un prenom entre 3 et 10 caractéres</small>';
    }
    if(empty($parents) || iconv_strlen($parents) < 2 || iconv_strlen($parents)>50)
    {
        $prtError .= '<small>Saisissez un parents entre 3 et 10 caractéres</small>';
    }
    if(empty($classe) || iconv_strlen($classe) < 2 || iconv_strlen($classe)>50)
    {
        $clsError .= '<small>Saisissez une classe qui contient entre 3 et 10 caractéres</small>';
    }
  
    if(!preg_match("#^[0-9]{10}+$#", $telephone))
    {
        $telError .= '<small> le numero doit contenir entre 0 et 10 chiffre</small>';
        
    }
    if(empty($nomError) && empty($preError)) && empty( $prtError)) && empty( $prtError)) && empty($clsError)) && empty($telError){ 
    {




        
    }    
    
}// FIN DU IF POST
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
<form class="col-md-4 offset-md-4 text-center" method="post" action="">
    <div class="form-group">

        <label for="nom">Nom</label>
        <?php echo $nomError ?>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter nom">
    </div>
    <div class="form-group">
        <label for="prenom"><?= $preError?></label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter prenom">
        <?php echo $preError?>
    </div>
    <div class="form-group">
        <label for="classe">Classe</label>
        <?php echo $clsError ?>
        <input type="text" class="form-control" id="classe" name="classe" placeholder="Classe">
    </div>
    <div class="form-group">
        <label for="parents">Parents</label>
        <?php echo $prtError ?>
        <input type="text" class="form-control" id="parents" name="parents" placeholder="Parents">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <?php echo $telError?>
    <input type="téléphone" class="form-control" id="exampleInputTel1"
     placeholder="Téléphone" name="telephone">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>