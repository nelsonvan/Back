<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Document</title>
</head>
<body>
    <form action="calculatrice2.php" method="POST">
        <label>choisie une opération: </label>
        <select name="dropdown">
            <option value = "Addition">+</option>
            <option value = "Soustraction" >-</option>
            <option value = "Multiplication">*</option>
            <option value = "Division">/</option>
            <option value = "Modulo">%</option>
        </select><br>
    entrer le premier nombre: <input type="text" name="nombre1" required><br><br>   
    entrer le deuxiéme nombre: <input type="text" name="nombre2" required><br><br>
    <input type = "submit" value = "Enter"/>  
</form> 
</body>
</html>