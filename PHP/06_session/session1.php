<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SESSION PHP</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="display-4 text-center">SESSION PHP</h1><hr>

        <?php
        // Une session est un moyen simple de garder des variables
        // accessibles qulque soit la page ou l'on se trouve
        // Paar example, sans une session active, nous ne pourions
       // naviguer sur un site tout en restant connecté
       // Les ssions sont conservées coté serveur puisqu'elles
       // contienne des données sensibles tel que votre email, nom, prenom
       // etc..
       session_start(); // permet de créer un fichier session  ce trouvant
       // dans le dossier c:/xampp/tmp

        // onn stock des données dans la session en créant des indices au
        // tableau ARRAY
       $_SESSION['pseudo'] = 'nelson';
       $_SESSION['nom'] = 'Vanicatte';
       $_SESSION['prénom'] = 'Nelson';

       echo'<pre>'; print_r($_SESSION); '</pre>';
        // vider une partie de la session
       unset( $_SESSION['prénom']);

       echo'<pre>'; print_r($_SESSION); '</pre>';

       

       // supprimer la session
      // session_destroy();
     
        ?>
    
    </div>
</body>
</html>