<?php
require_once("include/init.php");
extract($_GET);
require_once("include/header.php");

?>


<div class="container">

<div class="row form1">

  <div class="col-lg-3">

    <h1 class="my-4">Shop Name</h1>
    <div class="list-group">
    <?php
    // Exo : 1. Requete de selection des catogies , de produit distinctes
   // en BDD

   $resultat = $bdd->query("SELECT DISTINCT categorie  FROM produit");
  

   while($categorie = $resultat->fetch(PDO::FETCH_ASSOC)):
    ?>
            <a href="?categorie=<?= $categorie['categorie']?>" class="list-group-item alert-link text-dark text-center"><?= $categorie['categorie']
            
            ?></a>
    <?php endwhile; ?>        
    </div>

    


  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="<?= URL ?>photo/boutique5.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?= URL ?>photo/boutique6.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?= URL ?>photo/boutique.jpg"  alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">

    <?php if(isset($_GET['categorie'])):
    // si il y a une catégorie dans l 'URL, on selectionne  les produits associes

        $resultat = $bdd->prepare("SELECT * FROM produit WHERE categorie = :categorie");
        $resultat->bindValue(':categorie', $_GET['categorie'], PDO::PARAM_STR);
        $resultat->execute();

                
         else: 
          
        $resultat = $bdd->prepare("SELECT * FROM produit");
        $resultat->execute();
  
         endif; // Sinon, il n'y a pas de catégorie dans l'URL, on selectionne tout

        while($produits = $resultat->fetch(PDO::FETCH_ASSOC)):
         
    ?>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="fiche_produit.php?id_produit=<?= $produits ['$id_produit']?>"><img class="img-thumbnail" src="<?=$produits['photo']?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="fiche_produit.php?id_produit=<?= $produits ['$id_produit']?>"><?= $produits['titre']?></a>
            </h4>
            <h5><?=$produits['prix']?> €</h5>
            <p class="card-text"><?= $produits['description']?></p>
          </div>
          <div class="card-footer text-center">
          <a href="fiche_produit.php?id_produit=<?= $produits ['id_produit']?>"class="alert-link text-dark">Voir le detail</a>
          </div>
        </div>
      </div>
        <?php endwhile; ?>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<?php
require_once("include/footer.php");