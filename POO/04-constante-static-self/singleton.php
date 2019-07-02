<?php
class Singleton
{
    public $numero = 20;
    private static $instance = null;
    private function __construct(){} // La classe n'est pas instanciable car le constructeur est privé
    private function __clone(){} // l'objet ne sera pas clonable
    public function getInstance()

    {
        if(is_null(self::$instance))
        {
            self::$instance = new Singleton; 
        } 
        return self::$instance;
          
    }

    // $s = new singleton /!\ il n'est pas possible d'instancier la classe puisque le ocnstructeur 
    
}

$objet1 = Singleton::getInstance();
echo "<pre>"; var_dump($objet1); echo"</pre>";


$objet1 = Singleton::getInstance();
echo "<pre>"; var_dump($objet1); echo"</pre>";

$objet2 = Singleton::getInstance();

echo "<pre>"; var_dump($objet2);  echo"</pre>";/* objet2 a aussi la référence 1, il s'agit du meme objet. */// ici l'osqu'on a changé la valeur de la proprieté numero, cela a impacté sur les 2 variables objet1 et objet2, c'est normal puisque c'est le meme objet.

echo $objet1->numero . "<hr>";

echo $objet2->numero . "<hr>";

$objet2->numero = 22;

echo $objet1->numero . "<hr>";

echo $objet2->numero . "<hr>";









?>