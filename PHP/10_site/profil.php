<?php
require_once('include/init.php');

if(!internauteEstConnecte()) // Si l'internaute n'est pas connecte, il n'a rien a faire sur la page profile
//on le redirige vers la page connexion
{
    header("Location: connexion.php");
}
require_once('include/header.php');



//echo '<pre>'; print_r($_SESSION); echo'</pre>';



?>
<!-- Exo : afficher le pseudo de l'internaute en passant par son fichier sessionqs -->
<h1 class="display-4 text-center">Bonjour <strong class="text-info"></strong><?= $_SESSION['membre']['pseudo']?></strong></h1>

<!-- Réaliser une page profil en affichant toute les données de
l'internaute contenue dans la session sauf l'id_membre et le statut -->

<table class="col-md-6 mx-auto table table-dark">
<!-- Les ':' et endif / endforeach remplace les accolades -->
<?php foreach($_SESSION['membre'] as $key => $value): ?>
    <tr>
    <?php if($key != 'id_membre' && $key != 'statut'): ?>

        <th><?= $key ?></th><td><?=$value ?></td>

<?php endif; ?>
</tr>
<?php endforeach; ?>
</table><hr>

<?php
// Si le statut dans la session, donc dans la BDD est a 1, cela veut dire que l'on est administrateur du site 
if($_SESSION['membre']['statut'] == 1) // 
    $statut= 'ADMIN';
else
    $statut = 'MEMBRE';
?>
<h3 class="text-center">Vous étes <strong class="text-info"><?= $statut ?></strong></h3>



<?php
require_once('include/footer.php');