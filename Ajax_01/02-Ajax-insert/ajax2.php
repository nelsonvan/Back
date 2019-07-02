<?php
require_once('init.php');
extract($_POST);
$tab = array();

// Requete test :
// $resultat = $bdd->query("INSERT INTO employes (prenom) VALUES ('Nelson')");

if(!empty($personne))
{
    $resultat = $bdd->query("INSERT INTO employes (prenom) VALUES ('$personne')");
    $tab['resultat'] = "<div class='col-md-6 offset-md-3 alert alert-success text-center'>L'employé <strong>$personne</strong> a bien été enregistrer</div>";
}
else
{
    $tab['resultat']  = "<div class='col-md-6 offset-md-3 alert alert-danger text-center'>L'employé Merci de saisir un prénom</div>";
}

echo json_encode($tab); // pour pouvoir faire véhiculer des données en HTTP via une requéte AJAX, encoder les données en JSON, c'est un format léger C'est la reponse de la requéte 'retour' AJAX que l'on retrouve dans function(data) dans 1 fichier ajax2.js

