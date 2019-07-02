<?php
// fonction d'affichage d'un var_dump() avec balise <pre>
function debugV($param)
{
    echo '<pre style="background-color: #ebd4cb;">';
    echo '<strong>var_dump()</strong> <br>';
    var_dump($param);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Document</title>
  
</head>
<body>
    <div class="container-fluid">
        <header>
              
            <nav class="nav">
              <a class="nav-link active" href="#"><i class="fab fa-phoenix-framework"></i></a>
              <a class="nav-link" href="#">Phoenix</a>
              <a class="nav-link" href="#">Choisir une destination</a>
              <a class="nav-link" href="#">Payer</a>
              </nav>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/caraibes1.jpg" class="d-block w-100 img-fluid" alt="...">

    </div>


    <div class="carousel-item">
      <img src="img/caraibes_martinique_boucaniers.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/caraibes.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <button type="button" class="btn btn-light btn-lg btn-block">Choisir mon sejour tout de suite !</button>
</div>
    <footer class="col-md-12"><i class="fas fa-umbrella-beach"> Vos vacances de reve...</i> <i class="fas fa-sun"> Plage...</i> <i class="fas fa-building"> Urbain...</i> Croisiére... Montagne... A prix tout doux..  </footer>
    </div>
  </div>
</div>
            </nav>
        </header>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>