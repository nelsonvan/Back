<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Lien de mon fichier CSS -->
    <link rel="stylesheet" href="<?= URL ?>include/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet"> 
    <title>Bienvenue dans ma boutique !!!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Ma boutique de ouf</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <?php if(internauteEstConnecte()): // accées membre connecté non ADMIN ?> 
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>boutique.php">Boutique</a> 
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>profil.php">Profil</a> 
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>panier.php">Panier</a> 
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>connexion.php?action=deconnexion">Deconnexion</a> 
      </li>
     
      <?php else:  // accées visiteur non connecté ?>

      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>boutique.php">Boutique</a> 
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>inscription.php">Inscription</a> 
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>connexion.php">connexion</a> 
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>panier.php">Panier</a> 
      </li>
      <?php endif; ?>
      <?php if(internauteEstConnecteEtEstAdmin()): ?>
      <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Backoffice</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">

          <a class="dropdown-item" href="<?= URL ?>admin/gestion_boutique.php">Gestion Boutique</a>
          <a class="dropdown-item" href="<?= URL ?>admin/gestion_commande.php">Gestion Commande</a>
          <a class="dropdown-item" href="<?= URL ?>admin/gestion_membre.php">Gestion Membre</a>
        
         
        </div>
      </li>
      <?php endif; ?>
    </ul>


      
       
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>

<section class="container mon-conteneur">