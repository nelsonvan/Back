<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire de contact</title>
</head>
<body>
    <!--1. Réaliser un formulaire avec les champs suivant : objet, email,
    message et un bouton submit
    2. Controler en php que l'on receptionne bien toute les données du
    formulaires -->
    <div class="container">
        <h1 class="display-4 text-center">Formulaire ocntact</h1>
    <form class="col-md-4 offset-md-4" method="post" action="">
    <div class="form-group">
    <label for="objet">objet</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter objet" name="objet">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter email" name="email">
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php
    echo '<pre>'; print_r($_POST); echo '</pre>';
    // on verifie si on a bien cliqué sur le bouton submit qui a pour
    //attribut name 'submit' si nous avions plusieurs formulaires sur
   // la méme page, la condision permet de différencier quel formulaire
   //a été validé
    if(isset($_POST['submit']))
    {   // 1er argument :
        $destinataire = "nelson.vanicatte@lepoles.com";

       // 2eme argument :
        $sujet = $_POST['objet'];

         // 3eme argument :
        $message = $_POST['message'];

         // 4eme argument :
         $entetes = "MIME-Version 1.0 \n"; // est un standar internet
         // qui étend le format de données des courriels pour supporter
         // des textes en différents codage de caractéres autres que
         //L'ASCII, des contenus non textuels, des contenue multiple

        // entetes expéditeur : toujours 'From' et non 'De' par
        
         $entetes .= "From: $_POST[email]\n";

         // entetes d'adresse de retour : 
         $entetes .= "Reply-to: nelson.vanicatte@lepoles.com \n";

         // priorité urgente
         $entetes .= "X-priority: 1\n";

         // type de contenue HTML 
         $entetes .= "Contenue-type: text/html; charset=utf-8\n";

        mail($destinataire,$sujet,$message,$entetes); // fonction prédefinie premettant l'envoi de mail 
        // toujours 4 arguments : destination/sujet/message/expéditeur
        // l'ordre est crutial sinon le test ne fonctionne pas 
    }
    ?>
</form>
</div>
  </div>
</body>
</html>