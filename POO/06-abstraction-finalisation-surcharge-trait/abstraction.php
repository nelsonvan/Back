<?php
abstract class joueur
{
    public function seConnecter()
    {
        return $this->etreMajeur();
    }
    abstract public function etreMajeur();
    abstract public function Devise();
}
//------------------------------------------

 //$test = new Joueur; /!\ erreur !! une classe abstraite n'est pas instanciable

 class JoueurFr extends Joueur
 {
        public function etreMajeur()
        {
            return 18;
        }
        public function Devise()    
        {
            return "€";
        }
 }
 //------------------------------------------------------------------
 // Exo : créer un objet joueurFr et afficher les methods

 $joueurFr = new joueurFr;


echo "Il faut avoir au moin " . $joueurFr->etreMajeur() . '<hr>';

echo "La devise est : " . $joueurFr->Devise() . '<hr>';

class JoueurUs extends Joueur
{
    public function etreMajeur()
    {
        return 21;
    }
    public function Devise()    
    {
        return "$";
    }
}

$JoueurUs = new joueurUs;

echo "Il faut avoir au moin " . $JoueurUs->etreMajeur() . '<hr>';

echo "La devise est : " . $JoueurUs->Devise() . '<hr>';

/*
    -Une classe abstraite n'est pas instanciable
    -Les methods abstraites, nous sommes obligé de les redéfinir
    -Lorsque l'on herite de méthode 
*/




?>