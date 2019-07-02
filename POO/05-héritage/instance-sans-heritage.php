<?php
class A 
{
    public function direBonjour()
    {
        return "Bonjour";
    }
}
//------------------------------
class B // sans héritage de A
 {
     public $objetA; // __construct() s'execute automatiqument lorsque nous instancions B 
     public function __construct()
     {
         $this->objetA = new A; // je cré un objet issu de la class A que je stock dans la propriété nommé $objetA
         echo "s' execute automatiquement  et detail :";
         echo '<pre>'; var_dump($this->objetA); echo '</pre>';
     }
     public function uneMethode()
     {
         return $this->objetA->direBonjour(); // dans mon objet B '$b' je peut appeler des methods sur mon objet A Habituellment nous mettons q'une seul fléche, mais la $objetA contien un objet, une autre fleche est donc possible
     }
 }
 // créer un objetB 

 $b = new B;
echo $b->uneMethode() . '<hr>';
 echo $b->objetA->direBonjour() . '<hr>';

?>
