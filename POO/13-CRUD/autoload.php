<?php
class Autoload 
{
                                // Controller\controller
    public static function className($className)
    {
        require __DIR__ . '/' . str_replace('\\', '/', $className . '.php');
        // str replace() permet de remplacer les anti-slash '\' nous avons deux anti-slash sinon l'interpreteur considére que c'est un caractére d'echappement 
        //echo  "require  " . __DIR__ . '/' . str_replace('\\', '/', $className . '.php');
    }
}
spl_autoload_register(array('Autoload', 'className'));// s'execute lorsque l'interpréteur voit passer le mot clé 'new' et le fonciton 'className()' est executée dans le méme temps  // controller\Controller : envoyé en argument de la methode className


// $a = new Controller\Controller; // au mooment de l'instanciation l'autoload s'execute et va chercher le dossier 'Controller' le fichier 'controller.php' d'ou l'importance du nommage des dossiers et fichier 
// le namespace doit avoir le mémé nom que le dossier

// Exo : faire le méme affichage avec la ligne suivante

// $b = new  Model\EntityRepository;
?>