<?php
require_once('include/init.php');
require_once('include/header.php');

/*
    EXO: 
    1. Réaliser la requete permettant de selectionner le produit par rapport a l'id_produit envoyé dans l'URL
    2. Associer une méthode pour rendre le résultat du poduit : photo / categorie / tire / descrption / couleur / taille / prix / public
    mettre un bouton d'ajout au panier / selecteur quantité 

*/  



  if(isset($_GET['id_produit'])): // si 'indice 'id_produit' est définit dans l'URL

    $resultat = $bdd->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
    $resultat->bindValue(':id_produit', $_GET['id_produit'], PDO::PARAM_INT);
    $resultat->execute();
$fiche_produit = $resultat->fetch(PDO::FETCH_ASSOC);

   

 ?>
  <link rel="stylesheet" href="<?= URL ?>include/css/style.css">
        
         
 
 <div class="card mb-3 col-md-12" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <img src="<?= $fiche_produit['photo']?>" class="card-titled-block img-fluid">
        <h4 class="card-title"><?= $fiche_produit['categorie'] ?></h4>
        <h4 class="card-title"><?= $fiche_produit['titre'] ?></h4>
        <h4 class="card-title"><?= $fiche_produit['description'] ?></h4>
        <h4 class="card-title"><?= $fiche_produit['couleur'] ?></h4>
        <h4 class="card-title"><?= $fiche_produit['taille'] ?></h4>
        <h4 class="card-title"><?= $fiche_produit['prix'] ?></h4>
        <h4 class="card-title"><?= $fiche_produit['public'] ?></h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <button type="button" class="btn btn-outline-primary">Primary</button>

        
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
      </div>

    </div>
  </div>
  <?php 
  else: 
    header("Location: boutique.php");
endif; ?>
  </div>  
  
 <?php
require_once('include/footer.php');

  




