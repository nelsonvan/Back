  <?php 
require_once('init.php');
extract($_POST);
$tab = array();
//---------------------------------REQUETE DE SELECTION
$result = $bdd->query("SELECT * FROM employes WHERE prenom = 'Damien'");
// echo '<pre>';var_dump($result) ; '</pre>';

//---------------DECLARATION DU TABLEAU (requete 'retouur' AJAX)

$tab['resultat'] = '<table class="table table-border table-dark"><tr>';

// echo '<pre>'; print_r($employe); echo '</pre>';
for($i = 0; $i < $result->columnCount(); $i++)
{

    $colonne = $result->getColumnMeta($i);

    $tab['resultat'] .= "<th>$colonne[name]</th>";
}


$tab['resultat'] .= '</tr><tr></tr>';
$employe = $result->fetch(PDO::FETCH_ASSOC);
 foreach($employe as $value)
 {
     $tab['resultat'] .= "<td>$value</td>";
 }


$tab['resultat'] .= '</table>';

echo json_encode($tab);


