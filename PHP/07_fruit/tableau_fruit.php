<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tableau ARRAYs</title>
</head>
<body>
<div class="container text-center">
        <h1 class="display-4 text-center">Tableau fruits</h1><hr>

	<?php 
		require_once("fonction.php");
 //1- D�clarer un tableau ARRAY avec tout les fruits 
	$tab_fruit = array('pommes', 'bananes', 'peches', 'cerises');
	
	//2- D�clarer un tableau ARRAY avec les poids suivants : 100, 500, 1000, 1500, 2000, 3000, 5000, 10000.
	$tab_poids = array(100, 500, 1000, 1500, 3000, 5000, 10000);

	//3- Affichez les 2 tableaux
	echo '<pre>'; print_r($tab_fruit); echo '</pre>';
	echo '<pre>'; print_r($tab_poids); echo '</pre>';

	//4- Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour les transmettres � la fonction "calcul()" et obtenir le prix.
	echo '<hr>' . calcul($tab_fruit['3'], $tab_poids['1']) . '<hr>';
	
	//5- Sortir tout les prix pour les cerises avec tout les poids (indice: boucle).
		// $tab_poids = array(100, 500, 1000, 1500, 3000, 5000, 10000);

	echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-info
	text-center">';				
	foreach($tab_poids as $poids)
	{
		echo  calcul($tab_fruit['3'], $poids) . '<hr>';
	}
	echo'</div>';

	//6- Sortir tout les prix pour tout les fruits avec tout les poids (indice: boucle imbriqu�e).
							// pommes 
	foreach($tab_fruit as $fruit)
	{
		echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-success
	text-center">';				// 
		foreach($tab_poids as $poids)
		{
			echo calcul($fruit, $poids) . '<hr>';
		}
	echo'</div>';
	}
	// 7- Faire un affichage dans une table HTML pour une presentation plus sympas

	echo '<table class="table table-bordered text-center"><tr>';
	echo '<th>Poids</th>';
	foreach($tab_fruit as $fruit)
	{
		echo "<th>$fruit</th>";
	}
	echo '</tr>';
	foreach($tab_poids as $poids)
	{
		echo '<tr>';
		echo "<th>$poids g</th>";
		foreach($tab_fruit as $fruit)
		{
			echo "<td>" . calcul($fruit, $poids) . "</td>";
		}
		echo '</tr>';
	}

	echo '</table>';
	?>
	</div>


</body>
</html>