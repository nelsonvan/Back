
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Fiche produit</title>
</head>
<body>
    <div class="container text-center         
    ">
        <h1 class="display-4 text-center">Détail du produit n° <strong class="text-info"><?= $_GET['id']?></strong></h1><hr>

        <?php
     //   echo '<pre>'; print_r($_GET); echo '</pre>';
        // Les information envoyées dans l'URL sont automatiquement
       // stockées dans la superglobal $_GET, cela retourne un tableau
      // ARRAY associatif

      // Exo: afficher les données transmit dans l'URL avec un
  
     foreach($_GET as $key => $value)
        
     {  if($key = 'id') // si l'indice est diffétent de 'id' alors 
        // on affiche l'indice en fonction de la valeur de la supeeglobal
        // $_GET (ARRAY), c'est ce qui permet d'exclure
        //l'indice 'id'
         echo "<strong>$key</strong> : $value<br>";
         

     }
 
    
        ?>

        <a href="boutique.php">Retour a la boutique</a>
      
     </div>    
</body>
</html>