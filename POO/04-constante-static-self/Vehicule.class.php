<?php
class Vehicule
{
    private static $marque ='BMW';
    private $couleur = 'noir';
    public static function setMarque($marque)
    {
        return self::$marque = $marque;
    }
    public static function getMarque()
    {
        return self::$marque;
    }
    //-----------------------------
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
}
//---------------------------------------------
// Exo :: créer un objet de la class véhicule et faites une phrase en affichant la couleur et la marque du vehicule
$vehicule1 = new vehicule;
echo "La voiture est de marque  : <strong> " . Vehicule::getMarque() . ' est la couleur est ' . $vehicule1->getCouleur() .  "</strong><hr>";

// Exo : créer un autre vehicule est changer la couleur par violet 

$vehicule2 = new vehicule;

$vehicule2->setCouleur('violet');

echo "La voiture 2 est de marque  : <strong> " . Vehicule::getMarque() . ' est la couleur est ' . $vehicule2->getCouleur() .  "</strong><hr>";

$vehicule3 = new vehicule;

echo "La voiture 3 est de marque  : <strong> " . Vehicule::getMarque() . ' est la couleur est ' . $vehicule3->getCouleur() .  "</strong><hr>";


Vehicule::setMarque('Mercedes');

$vehicule4 = new Vehicule;
echo "La voiture est de marque  : <strong> " . Vehicule::getMarque('mercedes'). ' est la couleur est ' . $vehicule4->getCouleur() .  "</strong><hr>";


$vehicule5 = new Vehicule;
echo "La voiture est de marque  : <strong> " . Vehicule::getMarque('mercedes'). ' est la couleur est ' . $vehicule4->getCouleur() .  "</strong><hr>";



/*
    Un élément declaré 'static' appartient a la class et non l'objet Si je modifie un élément '(static) je modifie la class elle méme 
    $objet-> élément d'un objet a l'exterieur de la class
    $this élément d'un objet a l'interieur de la class
    class:: élément d'un objet a l'exterieur de la class
    self:: élément de la class a l'interieur de la class

*/
















?>
