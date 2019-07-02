<?php

extract($_POST);

if(internauteEstConnecte())
{
    header("Location: profil.php");// Si l'internaute est connectyé, il n'a rien a faire sur la page connexion, on le redrige vers sa page profil
}

if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{
    session_destroy();
}
// Si l'indice 'action' est définit dans l'URL et qu'il a comme valeur
// 'déconnexion', cela veut dire que l'on clique sur le lien 'deconnexion du coup
//on suprime le fichier session
if(isset($_GET['action'])&& $_GET['action'] == 'validate')
{
    $validate .= '<div class="col-md-6 offset-md-3 text-center alert alert-success">Félicitation vous etes inscrit sur le site. Vous 
    pouvez des a present vous connecter !!</div>';

    
}
require_once('include/header.php');

echo '<pre>'; print_r($_POST); echo '</pre>';

if($_POST)
{
    // On selectionne tout dans la table 'membre' a condition que le champs pseudo ou email de la BDD 
    // soit bien égale au pseudo ou email saisie dans le formulaire
    $verif_pseudo_email = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo OR email = :email");
    $verif_pseudo_email->bindValue(':pseudo', $email_pseudo, PDO::PARAM_STR);
    $verif_pseudo_email->bindValue(':email', $email_pseudo, PDO::PARAM_STR);
    $verif_pseudo_email->execute();

    // Si le resultat de la requete de selection est supérieur a 0, cela
   // veut dire que l'internaute a saisie un bon pseudo, donc on entre dan s le IF
    if($verif_pseudo_email->rowCount() > 0)
    {
        $membre = $verif_pseudo_email->fetch(PDO::FETCH_ASSOC); // On recupere en BDD de l'internaute qui saisie le bon
        // pseudo ou le bon email, on va pouvoir comparer les mots de passe

     //   echo '<pre>'; print_r($membre); echo '</pre>';
        // Si on hache le mot de passe a l'inscription (password_hash / password_verifypermet de comparer une clé de hachage a une chaine de cractéres)
     //   if(pssword_verify($mdp, $membre['mdp']))

        // One entre dans le IF seulment dans le cas ou l'internaute a saisie le bon email/pseudo et le bon mdp
        if($membre['mdp'] == $mdp)
        {
            // on passe en revue les données de l'internaute qui a saisie le bon email/pseudo et mdp
            foreach($membre as $key => $value)
            {
               if($key != 'mdp') // on exclue le mdp
               {
                    $_SESSION['membre'][$key] = $value; // pour chaque tour de boucle foreach on enregistre les données de l'internaute 
                   // dans son fichier ssesion
               }
            }
            //  echo '<pre>'; print_r($_SESSION); echo '</pre>'; 
            header("Location: profil.php"); // apées enrgistrement des données de l'internaute dans son fichier session, on le 
            // redirige vers sa page profil 
        }
        else // on entre dans  le ELSE dans le cas ou l'internaute  n'a pas 
       // saisie le bon mot de passe
        {
            $error .= '<div class="col-md-4 offset-md-4 alert alert-danger
            text-center text-dark">Le mot de passe n\ est pas valide
            </div>';
        }
        
    }
    else
    {   // On entre dans le ELSE si l'internaute n'a pas saisie le bon 
      // email ou le bon pseudo
        $error .= '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le pseudo ou email est inconnue en BDD 
        </div>';
    }
}
?>

<h1 class="display-4 text-center">CONNEXION</h1><hr>

<form method="post" action="" class="col-md-4 offset-md-4 text-center">
  <div class="form-group">
    <label for="exampleInputEmail1">Email ou pseudo</label>
    <input type="text" class="form-control" id="email_pseudo" aria-describedby="emailHelp" placeholder="Entrer pseudo ou email" name="email_pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="mdp" placeholder="motdepasse" name="mdp">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $validate ?>
<?= $error ?>

<!-- 1. Réaliser un formulaire de connexion avec les champs suivant : 
email ou pseudo / motdepasse / bouton submit -->




<?php
require_once('include/footer.php');
?>
