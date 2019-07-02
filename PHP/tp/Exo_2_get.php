<?php
if(isset($_GET['pays']))
{
    $pays = $_GET['pays'];
}

switch($pays)
{
    case 'fr';
        $pays = "Vous etes sur un site en francais<br>";
    break ; 
    case 'es';
    $pays =  "Vous etes sur un site en espagnol<br>";
    break;
    case 'an';
    $pays =  "Vous etes sur un site en anglais<br>";
    break;
    case 'it';
    $pays =  "Vous etes sur un site en italien<br>"; 
    break;  
}



?>

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
 <h2> </h2>

<ul class="col-md-2 offset-md-5 list-group">
    <li class="list-group-item"><a href="?pays=fr">France</a></li>
    <li class="list-group-item"><a href="?pays=es">Espagne</a></li>
    <li class="list-group-item"><a href="?pays=an">Angleterre</a></li>
    <li class="list-group-item"><a href="?pays=it">Italie</a></li>
</ul>

<h1 class="display-4 text-center"><?php if(isset($pays)) echo $pays ?></h1>

</div>
 </body>
 </html>
