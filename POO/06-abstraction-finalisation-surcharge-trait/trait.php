<?php
trait TPanier 
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return "Affichage des produits !!";
    }
}
//-------------------------------------------------

trait TMembre 
{
    
    public function affichageMembre()
    {
        return "Affichage des membre !!";
    }
}

//-------------------------------------------------------
class Site 
{
    USE TPanier, TMembre;
}
//---------------------------------------------------

$resultat = new Site;

echo  $resultat->affichageProduits();
echo $resultat->affichageMembre();
echo "Nombre de produit dans le panier : " . $resultat->nbProduit;

echo '<pre>'; var_dump($resultat); echo '</pre>';

/* 
    Les traits ont été inventées pour repousser les limites de l'heritage. Il est possible pour une classe d'heriter de plusieurs trait en méme temps Un trait est un regrupement de méthodes et propriétes pouvent etre dans une classe
*/
?>