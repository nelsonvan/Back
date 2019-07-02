<?php
require_once('autoload.php');

$controller = new Controller\Controller; // l'autoload voit passer le mot clé 'new' et fait appel au fichier Controller.php Et dans une 2eme temps dans le fichier controller.php il y a une instance 'new' repository, donc l'autoload s'execute et appel au fichier entityRepository

// echo '<pre>'; print_r($controller); echo '</pre>';


$controller->handlerRequest(); // on fait appel a la méthode handlerReequest() se trouvent dans le fichier controller.php



?>
