
<?php
require_once('../include/init.php');
// Si l'internaute n'est pas ADMIN il n'a rienn a faire ici on le redirige vers la page connexion
if(!internauteEstConnecteEtEstAdmin())
{
    header("Location:" . URL . "connexion.php");
}
extract($_POST);
extract($_GET);
//-------------- ENREGISTREMENT PRODUIT

//---------------------SUPRESSION PRODUIT-----------
// on rentre dans le IF seulment dans le cas 
if(isset($_GET['action']) && $_GET['action'] == 'suppression')

{
   // Exo :requete suppression
  $supp_prod = $bdd->prepare("DELETE FROM produit WHERE id_produit = :id_produit");
  $supp_prod->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
 // $id_produit fait reference a $_GET['id_produit'] (extract)
  $supp_prod->execute();

  $_GET['action'] = 'affichage';

  $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le produit n° <strong>$id_produit</strong> a bien été  suprimer !!</div>";

  



  
}
if($_POST)
{
    $photo_bdd = '';
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
    {
      $photo_bdd = $photo_actuelle; // Si on souhaite conserver la meme photo en cas de modification, on affecte la valeur de champ photo
      // 'hidden', c'est a dire l'URL de la photo 
    }
    if(!empty($_FILES['photo']['name'])) // on vérifie que l'indice 'name' dans la superglobal $_FILES n'est pas vide, cela veut dire que l'on a bien 
   // uploder une photo
    {
        $nom_photo = $reference . '-' . $_FILES['photo']['name']; // on redéfinit le nom de la photo en concaténant la réference saisi
        // dans le formulaire avec le nom de l aphoto 
        echo $nom_photo . '<hr>'; 

        $photo_bdd = URL . "photo/$nom_photo"; // on définit l'URL de la photo, c'est ce que l'on concervera en BBD

        echo $photo_bdd . '<hr>';

        $photo_dossier = RACINE_SITE . "photo/$nom_photo"; // on définit le chemin physique de la photo sur le disque dur
        // du serveur , c'est ce qui nous permettra de copier la hpoto dans le dossier photo 
        echo $photo_dossier . '<hr>'; 

        copy($_FILES['photo'] ['tmp_name'], $photo_dossier);
        // une ofnction prédefinie qui permet de copier la photo dasn le dossier photo . arguments : copy(nom_temporaire_photo, chemin de destination)

    }
    // Exo : Réaliser la requete d'insertion permettant d'inserer un produit dans la table 'produit' (requete préparée)
    if(isset($_GET['action']) && $_GET['action'] == 'ajout')
    {
      $data_insert = $bdd->prepare("INSERT INTO produit (reference, categorie, titre 
      , description, couleur, taille , public, photo, prix, stock  ) VALUES (:reference,:categorie,:titre,:description, :couleur,:taille,:public,:photo, :prix,:stock)");

      $_GET['action'] = 'affichage';

      $validate .=  "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le produit n° <strong>$reference</strong> a bien été  ajouteé!!</div>";

    }
    else
    {
      // Exo : requete update 
      $data_insert = $bdd->prepare("UPDATE produit SET reference = :reference, categorie = :categorie, titre = :titre
      , description = :description, couleur  = :couleur, taille = :taille, public = :public, photo =  :photo, prix =  :prix, stock = :stock WHERE id_produit = $id_produit");

      $_GET['action'] = 'affichage';

      $validate .=  "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le produit n° <strong>$id_produit</strong> a bien été  modiffier !!</div>";

  
    }

    foreach($_POST as $key => $value)
        if($key != 'photo_actuelle')
        {
          $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
        }

    {

      $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
      
    }


  $data_insert->bindValue(":photo", $photo_bdd, PDO::PARAM_STR);
  $data_insert->execute();

}

require_once('../include/header.php');

echo '<pre>'; print_r($_POST); echo'</pre>';
echo '<pre>'; print_r($_FILES); echo'</pre>';



$result = $bdd->query("SELECT * FROM produit");
$produits = $result->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($produits); echo'</pre>';



?>



<h1 class="display-4 text-center">Liste produit</h1>


<ul class="col-md-4 offset-md-4 list-group mt-4 text-center">
  <li class="list-group-item bg-dark text-center text-white"><h5>BACK OFFICE</h5></li>
  <li class="list-group-item bg-dark text-center text-white"><a href="?action=affichage" class="alert-link text-white">AFFICHAGE PRODUITS</a></li>
  <li class="list-group-item bg-dark text-center text-white"><a href="?action=ajout" class="alert-link text-white">AJOUT PRODUITS</a></li>


 
</ul>



<?php if(isset($_GET['action']) && $_GET['action'] == 'affichage'): ?>
<?= $validate ?>
<table class="table table-bordered text-center tab1">
<?php foreach($produits[0] as $key => $value): ?>
      <th><?= strtoupper($key) ?></th> 
<?php endforeach; ?>
    <th>MODIFIER</th>
    <th>SUPPRIMER</th>    
</tr>
<?php foreach($produits as $key => $tab): ?>
  <tr>
    <?php foreach($tab as $key2 => $value): ?>

        <?php if($key2 == 'photo'): ?>
            <td><img src="<?= $value ?>" alt="<?= $tab['titre'] ?>" class="card-img-top" ></td>
        <?php else: ?>
            <td><?= $value ?></td>
        <?php endif; ?>

    <?php endforeach; ?>
    <td><a href="?action=modification&id_produit=<?= $tab['id_produit'] ?>" class="text-warning"><i class="fas fa-pencil-alt text-dark"></i></a></td>
    <td><a href="?action=suppression&id_produit=<?= $tab['id_produit'] ?>" class="text-danger"><i onclick="return(confirm('etes vous certain'))"><i class="fas fa-trash-alt text-dark"></i></a></td>
  
    
    </tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

<?php
if(isset($_GET['id_produit']))
{
  $resultat = $bdd->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
  $resultat->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
  $resultat->execute();

  $produit_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
  echo '<pre'; print_r($produit_actuel); echo'</pre>';
}

$reference = (isset($produit_actuel['reference'])) ? $produit_actuel['reference'] : '';
$categorie = (isset($produit_actuel['categorie'])) ? $produit_actuel['categorie'] : '';
$titre = (isset($produit_actuel['titre'])) ? $produit_actuel['titre'] : '';
$description = (isset($produit_actuel['description'])) ? $produit_actuel['description'] : '';
$couleur = (isset($produit_actuel['couleur'])) ? $produit_actuel['couleur'] : '';
$taille = (isset($produit_actuel['taille'])) ? $produit_actuel['taille'] : '';
$public = (isset($produit_actuel['public'])) ? $produit_actuel['public'] : '';
$photo = (isset($produit_actuel['photo'])) ? $produit_actuel['photo'] : '';
$prix = (isset($produit_actuel['prix'])) ? $produit_actuel['prix'] : '';
$stock = (isset($produit_actuel['stock'])) ? $produit_actuel['stock'] : '';   
?>


<!-- AFFICHAGE PRODUITS
<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET ['action'] == 'modification')): ?>
Exo : réaliser le traitment permettant l'affichage des produit sous form de tableau html -->
<h1 class="display-4 text-center"><?= $action ?></h1>
<!-- 1. Réaliser un formulaire nous permettznt d'inserer un produit dans la table 'produit sauf produit' -->







<form class="col-md-6 offset-md-3" method="post" action="" enctype="multipart/form-data">
 <div class="form-group">
    <label for="Reference">Reference</label>
    <input type="text" class="form-control col-md-12" id="Reference" placeholder="Reference" name="reference" value="<?= $reference ?>">
  </div>
  <div class="form-group">
    <label for="categorie">Categories</label>
    <input type="text" class="form-control" id="categorie" aria-describedby="emailHelp" placeholder="Categorie" name="categorie" value="<?=$categorie?>">
  </div>
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control col-md-12" id="titre" placeholder="Titre" name="titre" value="<?=$titre?>">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control col-md-12" id="description" placeholder="Description" name="description" value="<?=$description?>">
  </div>
  <div class="form-group">
    <label for="couleur">Couleur</label>
    <input type="text" class="form-control col-md-12" id="couleur" placeholder="Couleur" name="couleur" value="<?=$couleur ?>">
  </div>
  <div class="form-group">
    <label for="taille">Taille</label>
    <input type="number" class="form-control col-md-12" id="taille" placeholder="Taille" name="taille" value="<?=$taille?>">
  </div>
  <div class="form-group">
    <label for="public" >Public</label>
    <select class="form-control" name="public" value="public">
  <option value="m" <?php if($taille == 'm') echo 'selected'; ?>>Monsieur</option>
  <option value="f" <?php if($taille == 'f') echo 'selected';?>>Madame</option>
  <option value="mi" <?php if($taille == 'mi') echo 'selected'; ?>>Mixte</option>
  </select>
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control-file" id="photo"  name="photo">
  </div>
  <?php if(!empty($photo)): ?>
  <em>Vous pouvez  uploader une nouvelle photo si vous souhaitez la changer</em>
  <img src="<?= $photo ?>" alt="<?= $titre ?>" class="card-img-top">
<?php endif; ?>
<input type="hidden" id="photo_actuelle" name="photo_actuelle"
value="<?= $photo ?>">
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control col-md-12" id="prix" placeholder="Prix" name="prix" value="<?=$prix?>">
  </div>
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="number" class="form-control col-md-12" id="stock" placeholder="Stock" name="stock" value="<?=$stock?>">
  </div>

  <button type="submit" class="btn btn-primary"><?= $action ?></button>
</form>
<?php 
require_once('../include/footer.php');
endif;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
   
    </style>
</head>
<body>
    
</body>
</html>
