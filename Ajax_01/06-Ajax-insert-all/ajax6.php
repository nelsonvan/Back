<?php
require_once('init.php');
extract($_POST);
$tab = array();

//echo '<pre>'; print_r($_POST); echo '</pre>';


    if(empty($prenom) && (empty($nom))  && (empty($service)) && (empty($date_embauche)) && (empty($salaire))){
        $tab['message'] = '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Tout les champs doivent etre remplie !!
        </div>';


       
    }
    else
    {
     
        
        $resultat = $bdd->query("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire ) VALUES ('$prenom', '$nom', '$sexe', '$service', '$date_embauche', '$salaire')");

        $tab['message'] = '<div class="col-md-4 offset-md-4 alert alert-success
        text-center text-dark"> L\'employé a bien etait ajouter</div>';
    }
    
 
    
    $result = $bdd->query("SELECT * FROM employes");

    // $tab['resultat'] = "<div class='col-md-6 offset-md-3 alert alert-success text-center'>L'employé <strong>$prenom, $nom, $sexe, $service, $date_embauche, $salaire</strong> a bien été enregistrer</div>";
    $tab['resultat'] = '<table class="table table-bordered text-center table-dark">';

    $tab['resultat'] .= '<tr>';
        for($i =0; $i< $result->columnCount(); $i++);
        {
            $colonne = $result->getColumnMeta($i);
            $tab['resultat'] .= "<th>$colonne[name]</th>";
        }
        $tab['resultat'] .='</tr>';
        
        while($employes = $result->fetch(PDO::FETCH_ASSOC)){
            $tab['resultat'] .= '<tr>';

            foreach($employes as $value)
            {
                $tab['resultat'] .= "<td>$value</td>";
            }
            $tab['resultat'] .= '</tr>';
            

        }
      

    $tab['resultat'] .= '</table>';




    



echo json_encode($tab); // pour pouvoir faire véhiculer des données en HTTP via une requéte AJAX, encoder les données en JSON, c'est un format léger C'est la reponse de la requéte 'retour' AJAX que l'on retrouve dans function(data) dans 1 fichier ajax2.js






