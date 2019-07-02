<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>







    <!--
        1. Réaliser un formulaire HTML avec les champs suivants : pseudo, mdp,
        confirmer mdp, nom, email, téléphone, adresse, ville,
        code_parental et un bouton submit

        2. Controler en PHP que l'on receptionne bien toute les données du
        formulaire

        3. Faites en sorte d'informer l'internaute di le pseudo n'est pas 
        compris entre 2 et 20 caractéres

        4. Faites en sorte d'informer l'internaute si les mot de passe ,e
        sont pas identiques

        5. faite en sorte d'informer l'internaute si le mot de pass n'est pas de
        au bon format

        6. Faites en sorte d'informer l'internaute si le code postal n'est pas au bon 
        format

        7. Faites en sorte d'informer l'internaute si le champs nom est 
        laisse vide 
    -->  
    <?php
    // Exo 2 :
     echo '<pre>'; print_r($_POST); echo '</pre>';
     
     $error = "";
    // Exo : 3
    if($_POST)
    {

     if(iconv_strlen($_POST['pseudo']) < 2 || iconv_strlen($_POST['pseudo']) > 29 )
     {
        $error.= '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le pseudo doit contenir entre 2 et
        20 caractéres !! </div>';
     }
     // Exo : 4
     if($_POST['mdp'] !== $_POST['confmdp'])
     {
        $error.='<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le mot de passe est différent
        du mot de passe confirmé
        </div>';
     }
     // Exo : 5
     // SI le champ 'email n'est pas (!) au bon format alors on entre
     //dans les accolades
     if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
     {
        $error.= '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le format de l\'email n\'est 
         pas correct
        </div>';
     }     // Exo : 6
    // Si lataille du cham 'pseudo' est différente de 5 caractére ou 
    // si le champs n'est pas de type numerique, alors on entre dans les 
    // acolades de IF
     if(iconv_strlen($_POST['cp']) !== 5 || !is_numeric($_POST['cp']))
     {
        $error.= '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le format du code postal
         n\'est pas valide</div>';   
    }
    // Exo : 7
    // Sile champ 'nom' est vide, alors on entre dans la condition IF
    if(empty($_POST['nom']))
    {
        $error.= '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Merci de remplir le champs</div>';   
         
    }
    // Exo : 8 
    /* la fonction preg_match() est une expression reguliere (regex) est toujours entourée de diezes "##" affin de preciser les options
    ^ indique le debut de la chaine
    $ indique la fin de la chaine
    + est la pour dire que les caracteres peuvent être utilisés plusieurs fois
    */
    if(!preg_match('#^[0-9]{10}+$#', $_POST['tel']))
    {
       $error.= '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">téléphone non valide, caractéres non
        autorisé !!!</div>';  
    }

    echo $error;
    /*
        On stock tout les messages d'erreurs dans la variable '$error',
        si cette variable est vide, cela veut dire que nous ne sommes
        enter dans aucune condition IF, donc que l'internaute a
        bien rempli 
    */

    if(empty($error))
    {
        echo '<div class="col-md-4 offset-md-4 alert alert-success
        text-center text-dark">inscription valide !!!</div>';  
        
    }
    

}


     




     

    


  
    ?>
</body>
</html>