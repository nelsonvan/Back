<?php
//------- FONCTION MEMBRE --------------//
function internauteEstConnecte()// cette fonction indique si le membre est connecté
{
    if(!isset($_SESSION['membre']))// si l'indice 'membre' n'est pas définit dans  la session, cela veut dire que l'internaute n'est pas 
   // definit dasn la session, cela veut dire l'internaute n'est pas passé par la page connexion, donc n'est pas connectés
    {
        return false;
    }
    else
    {
        return true;
    }
}

//-----------FONCTION ADMIN----------------//
function internauteEstConnecteEtEstAdmin()
{   // Si la session du membre est définit et que son staut est a 1, cela 
    // veut dire qu'il est bien ADMIN et qu'il est bien connceté
    if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1)
    {
        return true;
    }
    else
    {
        return false;
    }

    
}

?>