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
    <title>Document</title>
</head>
<body>
    
</body>
</html>