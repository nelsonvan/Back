<?php
if($_GET)
{
    echo '<pre>'; print_r($_GET); echo '</pre>';

    foreach($_GET as $key => $value)
{

    if($key != 'id')
    {
        echo "<strong>$key</strong> : $value<br>";
        
    }
    
        
}

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
    <div class="container text-center">
       <a href="?id=1&genre=homme">Homme<br></a>
       <a href="?id=2&genre=femme">Femme</a>
    </div>
    
</body>
</html>