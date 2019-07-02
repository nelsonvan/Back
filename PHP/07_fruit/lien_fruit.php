<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- 
        1. effectuer 4 lien HTML pointant sur la mémé page avec le nom des
        fruits.
        2. faites en sorte d'envoyer 'cerises' dans l'URL si on 
        clic sur le lien cerises. (faire la mémé chose avec tout lers fruits)
        3. Tenter d'afficher cerises sur la page web si l'on a cliqué dessus
        (si cerises est passé dans l'url par conséquuent / méme chose avec tout
        les fruits)
        4. Envoyer l'innformation a la fonction calcul() afin d'afficher le
        prix pour 1kg de cerise (pareil pour tout les fruits)
     -->
     <div class="container text-center">
        <h1 class="display-4 text-center">Fruits</h1><hr>
        <h4>Votre choix : <strong class="text-info"><?= (isset($_GET
        ['fruits'])) ? $_GET['fruits'] : "Aucun fruit selectionné !!"; ?></strong></h4>
            <li class="list-group-item"><a href="?fruits=cerises">Cerises</a></li>
            <li class="list-group-item"><a href="?fruits=bananes">Bananes</a></li>
            <li class="list-group-item"><a href="?fruits=pommes">Pommes</a></li>
            <li class="list-group-item"><a href="?fruits=peches">Péches</a></li>
        </ul>
    </div>
    <?php

         // <?= ----> echo
        // ? remplace le IF
        // : remplace le else
ù
    echo '<pre>'; print_r($_GET); '</pre>';

    require_once("fonction.php");
    // La condition permet de vérifier si l'indice 'choix' est bien
    // définit dans L'URL, donc par conséquent que l'on a cliqué 
    if(isset($_GET['fruits']))
    {
        echo calcul($_GET['fruits'], 1000);
    }
   


    ?>

</body>
</html>