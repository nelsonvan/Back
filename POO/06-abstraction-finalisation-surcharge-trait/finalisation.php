<?php
final class Applications
{
    public function lancementApplication()
    {
        return "L'appli se lance comme cela !! <hr>";

    }
}
//----------------------------------------------------------
// Final permet de vérouiller une class ou une methode, c'est un méthodologie de travail 
$app = new Applications; // une classe finale est bien instanciable
echo '<pre>'; var_dump($app); echo '</pre>';
echo $app->lancementApplication();

// class Test extends Application () --> /!\ erreur !! il n'est pas possible d'heriter d'une class finale

class Application2
{
    final public function lancementApplication()
    {
        return "L'appli se lance comme cela !! <hr>";

    }
}

class Extension extends Application2
 { 
    // public function lancementApplication()
    // }
    // /!\ erreur !! en cas d'heritage, il n'est pas possible de redeclarer une methode 'final' elle est verouillé, onn ne peut plus la surcharger / ameliorer
 }
 //---------------------------------------------------------------------------------------------------------------------------
 $ext =  new Extension;
 echo $ext->lancementApplication(); 
 //--------------------------------------------------------------------------------------------------------------
 // L'interet de mettre le mot clé 'final' sur une methode de vérouiller afin d'empecher tout sous-class de la reféfinir (quand nous voulons que le comportemetn d'une méthode soit préservé dura,t l'heritage)





?>