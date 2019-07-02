<?php
//  defiint les actions de l'internaute (controle de l'application ) example si je souhaite afficher les information 10 par 10 ces dans ce fichier qu'on fera le traitment  
namespace Controller;

class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \Model\EntityRepository; // permet de récuerer une connexion a la BDD qui se trouve dans le fichier Entityrepository
    }
    public function handlerRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL; // si 'op' est definit dans L'URL, onn le stock dans une variable sinon on stock ''

        try
        {
            if($op == 'add' || $op == 'update') $this->save($op); // Si on ajoute ou modifie un employe, on appel la méthode save
            elseif($op == 'select') $this->select();  // si on selectionne l'employe on fait appel a la methode select()
            elseif($op == 'delete') $this->delete(); // si on suprprim un employe, on fait appel a la methode delete()
            else $this->selectAll(); // permet d'afficher l'ensemble des employes

        }
        catch(Exception $e)
        {
            die("Probléme dans l'action de l'internaute");
        }
    }

    public function selectAll()
    {
        // echo 'Méthode selectAll !!';
        // $r = $this->db->selectAll();
        // db --> represente mon objet issu de la classe EntityRepository
        // >db->selectAll(); poinnte vers la méthode selectAll() classe EntityRepository
        //echo '<pre>'; print_r($r); echo '</pre>';

        $this->render('layout.php', 'donnees.php', array (
            'title' => 'toutes les donnees', 
            'donnees' => $this->db->selectAll(), 'fields' => $this->db->getFields()
        )); // on pointe sur la methode EntityRepository()
        
    }

    public function save($op)
    {
        $title = $op;

        if($_POST)
        {
            $r = $this->db->save(); // Lorsque l'on valide le formulaire d'ajout, on execute la méthode save() du fichier entityRepository
        }

        $this->render('layout.php', 'donnees-form.php', array("title" => "Donnée : $title", "op" => $op, "fields" => $this->db->getFields(), 'id' => 'id' .ucfirst($this->db->table))); // on affiche idemploye,  cela servira a pointe sur l'indice 
        
    }

    public function render($layout, $template, $parameters = array())
    {
        extract($parameters);
        ob_start();

        require "view/$template";

        $content = ob_get_clean();

        ob_start();

        require "view/$layout";
        return ob_end_flush();
    }
}
