<?php
require_once('init.php');
extract($_POST);
$tab = array();

//------------------------REQUETE DE SELECTION ALLER
$result = $bdd->query("SELECT * FROM employes WHERE id_employes = 388");

//------------------------- DECLARATION DU TABLEAU DE L'EMPLOYE RETOUR
$tab['resultat'] = '<table class=" table-bordered text-center table-dark"><tr>';
for($i = 0; $i < $result->columnCount(); $i++)
{
    $colonne = $result->getColumnMeta($i);
    $tab['resultat'] .= "<th>$colonne[name]</th>";
}
$tab['resultat'] .= '</tr>';


$tab['resultat'] .= '</tr><tr></tr>';
$employe = $result->fetch(PDO::FETCH_ASSOC);
 foreach($employe as $value)
 {
     $tab['resultat'] .= "<td>$value</td>";
 }


$tab['resultat'] .= '</table>';



echo json_encode($tab);



