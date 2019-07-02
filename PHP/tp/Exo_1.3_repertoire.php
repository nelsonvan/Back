<?php
if(($_POST))

{
    echo '<pre>'; print_r($_POST); echo'</pre>';

    if(iconv_strlen($_POST['pseudo']) < 3 || iconv_strlen($_POST['pseudo']) > 10 )
  {
    echo '<div class="col-md-4 offset-md-4 alert alert-danger
        text-center text-dark">Le pseudo doit contenir entre 3 et
        10 caractéres !! </div>';
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

</div>
 </body>
 </html>
