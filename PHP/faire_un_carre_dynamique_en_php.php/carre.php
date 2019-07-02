<?php
$carre = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container1{
            background-color: red;
            height: 150px;
            width: 150px;
            
        }
        .container2{
            background-color:blue;
            height: 150px;
            width: 150px;
          
        }
    
    </style>
</head>
<?php
if(empty($_GET)){
?>
<body>
    <div class="container1">
        <p>div</p>
    </div>
    <a href="?carre=rouge" class="col-md-6 btn btn-success">Carre</a> 
<?php
}else{
?>
    <div class="container2">
        <p>div</p>
    </div>
    <a href="carre.php" class="col-md-6 btn btn-success">Carre</a> 
<?php
}
?>    
</body>
</html>