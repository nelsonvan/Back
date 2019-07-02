<?php
 echo '<pre>'; var_dump($_GET); echo '</pre>';
 

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style..css">
    
    <title>Document</title>
</head>
<body>
<div class="container">
  <header class="col-md-12">
        <h1><i class="fas fa-kiwi-bird"></i>Au Poid Gourmand</h1>

        <?php
        if(empty($_GET)) {
        ?>
        
  </header>
  <main>
        <section class="row">
            <div class="col-md-6">
              <div class="card offset-md-3" style="width: 18rem;">
              <img src="img/rome.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title text-center">Formule Rome</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="?menue=rome&prix=25&img" class="col-md-12 btn btn-success">Choisir</a>
             </div>
             </div>
             </div>
            <div class="col-md-6">
              <div class="card offset-md-3" style="width: 18rem;">
              <img src="img/nyork.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title text-center">Formule New York</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="atelier.php?id=2&image=ny" class="col-md-12 btn btn-danger">Choisir</a>
             </div>
             </div>
             </div>
        </section> <!-- Fin row 1 -->
        <section class="row">
            <div class="col-md-6">
              <div class="card offset-md-3" style="width: 18rem;">
              <img src="img/delhi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title text-center">Formule Dehli</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="atelier.php?id=3&image=dehli" class="col-md-12 btn btn-warning">Choisir</a>
             </div>
             </div>
             </div>
            <div class="col-md-6">
              <div class="card offset-md-3" style="width: 18rem;">
              <img src="img/hanoi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title text-center">Formule Hanoï</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="atelier.php?id=4&image=hanoi" class="col-md-12 btn btn-primary">Choisir</a>
             </div>
             </div>
<?php         </div>
}
?>             
        </section><!-- Fin row 2 -->
        <section class="row">
          <div class="col-md-10"></div>
        <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <img src="img/pg.jpg" class="card-img-top" alt="...">
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<?php 
?>
</section>
  </main>
  <footer>
      <div class="row">
        <div class="col-md-6">
          <h2 id="textBas"><i class="fas fa-kiwi-bird"></i>.....<i class="fas fa-kiwi-bird"></i>....<i class="fas fa-kiwi-bird"></i>...<i class="fas fa-kiwi-bird"></i>..<i class="fas fa-kiwi-bird"></i>.<i class="fas fa-kiwi-bird"></i>Au poid Gourmand</h2> 
        </div> 
      </div> 

  </footer>

  </div><!-- Fin container -->

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

