<?php
class A
{
    public function calcul()
    {
        return 10;
    }
}
//----------------------------------------------

class B extends A 
{
    public function calcul() // redefinition 
    {
        $nb = parent::calcul(); // permet fonctionne appeler une méthode d'une classe 
        // parente lors d'une surcharge (override) Une surcharge permet deprendre en compte le comportement  de ma fonction d'origin et d'y rajouter un traitment complementaire 
        if($nb <= 100 ) return "$nb est inferieur a 100";
        else           return "$nb est superieur a 100";
    }
}
//--------------------------------------------------------------------------------------------------------------------------
//  Pour surcharge, si on faisait pas ca dans wordpress, on ne pourrais pas mettre a jour les CMS, on modifierais les fonctions
$resultat = new B;
 echo $resultat->calcul();
?>