<?php

class Electricien
{
    public function getSpecialiste()
    {
        return "pose de cables, tableaux electriques.. <hr>";
    }
    public function getHoraires()
    {
        return "10H / 18 h <hr>";
    }
}
class Plombier
{
    public function getSpecialiste()
    {
        return "tuyau, robinets, chauffe-eau, compteurs..<hr>";
    }
    public function  getHoraires()
    {
        return "10H / 18 h <hr>";
    }
}
//-----------------------------------------------------------

class Entreprise 
{           // 1
    public $numero = 0;             // 'Plombier'
    public function appelUnEmploye($employe)
    {
        $this->numero++;
        // $this->monEmploye1 = new Plombier
        // $this->monEmploye1 = new Electricien
        $this->{"monEmploye" . $this->numero} = new $employe; // A chauqe fois q'on execute la methode appelUnEmploye cela genere en mémé temps une propriété dans laquel est stock une instance d'une class 

        return $this->{"monEmploye" . $this->numero}; // on retournz l'objet généré // return $entreprise->monEmploye1 $entreprise->monEmploye2
    }
}

$entreprise = new Entreprise;
$entreprise->appelUnEmploye('Plombier');

echo $entreprise->monEmploye1->getSpecialiste();
echo $entreprise->monEmploye1->getHoraires();
//-------------------------------------------
$entreprise->appelUnEmploye('Electricien');


echo $entreprise->monEmploye2->getSpecialiste();
echo $entreprise->monEmploye2->getHoraires();











?>