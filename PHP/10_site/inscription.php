<?php
require_once("include/init.php");

extract($_POST);


if(internauteEstConnecte())
{
    header("Location: profil.php");// Si l'internaute est connectyé, il n'a rien a faire sur la page connexion, on le redrige vers sa page profil
}

if($_POST)
{
    echo '<pre>'; print_r($_POST); echo '</pre>';
    $verif_pseudo = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
    $verif_pseudo->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $verif_pseudo->execute();
    if($verif_pseudo->rowCount() > 0)
    {
        $error .= '<div class="col-md-6 offset-md-3 text-center alert alert-danger">Le pseudo <strong> '  . $pseudo . '</strong> est deja existant en BDD. Merci d\'saisir un nouveau !!</div>';
        
    }//if($verif_pseudo->rowCount() > 0)

    //------------------------CONTROL MDP ---------------------//
    if($_POST['mdp'] !== $_POST['confmdp'])
    {
        $error.='<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le mot de passe est différent
        du mot de passe confirmé
        </div>';
    }

    // Exo : si l'internaute a bien rempli le formulaire , cela veut dire qu'il n'est passe dans acune des condition IF donc la
    // variable $erro est vide, nous pouvons donc execute le traitment de l'insertiion (requete préparé)

    
    if(!$error)
    {  
     //$_POST ['mdp']= password_hash($_POST['mdp'], PASSWORD_DEFAULT); // on ne conserve 

     
         
    $data_insert = $bdd->prepare("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :ville, :code_postal, :adresse)");
        

        foreach($_POST as $key => $value)
        {
            if($key != 'confmdp')
            {   
                $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
            }
        }
        $data_insert->execute();

        header("Location: connexion.php?action=validate"); // header() fonction prédefinie qui permet d'effectuer une redirection de page / URL

        echo '<div class="col-md-4 offset-md-4 alert alert-success
        text-center text-dark">inscription valide !!!</div>';  
        
    }
    
    
    }//FIN if($_POST)
require_once("include/header.php");
?>

<!-- 
    1. Créer un formulaire HTML correspondant a la table membre de la BDD 'site' (sauf id_membre et statut)
    2. Controler en PHP que l'on receptionne bien toute les données du formulaire ($_POST) ajouter le champs confirme mdp
    3. Controler la disponibilité du pseudo
    4. Faites en sorte d'informer l'internaute si les champs ne sont pas identique

 -->

 



<h1 class="display-4 text-center">INSCRIPTION</h1><hr>
<?php
    echo $error;
   
?>
 
<?php
require_once("include/footer.php");
?>