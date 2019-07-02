<?php
class Animal 
{
    protected function deplacement()
    {
        return "Je me deplace";
    }
    public function manger()
    {
        return "Je mange chaque jour";
    }
}
//------------------------------------------
class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un éléphant et <strong>" . $this->deplacement(). '</strong><hr>';
    }
}
//--------------------------------
$elephant = new Elephant;
echo '<pre>'; print_r(get_class_methods($elephant)); echo '</pre>';
echo $elephant->quiSuisJe();

class Chat extends Animal 
{
    public function quiSuisJe()
    {
        return "Je suis un chat";
    }
    public function manger()
    {
        return "Je me goinfre comme un gros chat";
    }
}

// Crée un  objet issu de la classe 'Chat' et afficher le resultat des 2 méthodes 

$chat = new Chat;

echo $chat->quiSuisJe() . '<hr>';

echo $chat->manger() . '<hr>';// affiche "Je me goinfre comme un gros chat !! "
// et non pas je mange chaque jour car la méthode a été definie dans la class Chat 
// L'interpreteur cherche d'abord dans la class 'Chat' et seulment si la methode n'avait pas été trouve, il aurait cherche dans class dont j'herite

// il n'est pas possible d'heriter de plusieurs class en méme temps --> class chat extends Animal  , Elephant !!
?>