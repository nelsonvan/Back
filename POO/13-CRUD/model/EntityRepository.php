<?php
namespace Model;
//  contient toute les connexion et requete a la base de données 

class EntityRepository
{
    private $db;
    public $table;
    public function getDb() // méthode permettent d'instancier la class PDO et de créer objet PDO
    {
        if(!$this->db) // seulment si $this->$db n'est pas rempli, si il n'y a pas de connexion BDD, alors on la construit
        {
            try
            {
                $xml = simplexml_load_file('app/config.xml');
                // echo '<pre>'; print_r($xml); '</pre>';
                $this->table = $xml->table; // on associe le nom de la table du fichier xml a la propriété table de la class cette propriété servivra   pour toute nos requete sql (INSERT INTO $this->table)


                try
                {
                    $this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=" .$xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)); // connexonn a la BDD, si jamais on change de BDD, nous aurons pas besoin de modifier ce code, c'est un code generic , c'est le fichier config.xml que l'on modifiera
                    //echo '<pre>'; var_dump($this->db); echo '</pre>';
                }
                catch(\PDOException $e)
                {
                    die("problem de connexion BDD !!");
                }
                
            }
            catch(\PDOException $e)
            {
                die('Probleme de fichier xml');
            }
            
            
        }
        return $this->db; // on retourne la connexion 
    }

    public function selectAll()
    {
        // $q = bdd->query("SELECT * FROM employe)
        //$this->getDb() represente un objet PDO donc une connexion a la BDD
        $q = $this->getDb()->query("SELECT * FROM " . $this->table);
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return $r;
    }
    public function getFields() // méthode permettant de récuperer le noms des champs / colonne de la table 'employe'
    {
        $q = $this->getDb()->query("DESC " . $this->table); // DESC : description de la table 
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return array_splice($r, 1); // permet de retirer le premier champs dans le formulaire
    }

    public function save()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        
        // $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst($this->table) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');

        $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst ($this->table) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');
        // $this->table : retourne la table 'employe'

        // id . ucfirst($this->table) : permet d'extraire chaque indice du 
        // implode ()
    }
}
 $e = new EntityRepository;
 $e->getDb();

