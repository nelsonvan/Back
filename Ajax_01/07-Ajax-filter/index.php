<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="ajax7.js"></script>
  
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="display-4 text-center"> 07 AJAX filter</h1><hr>
        <form method="post" action="">
            <div class="form-group">
                <label for="exampleFormControl">Example select</label>
                <select class="form-control" id="personne" name="personne">
                <?php
                require_once('init.php');
                $result = $bdd->query("SELECT DISTINCT service FROM employes");
                ?>
                    <!-- Forme d'écriture ternaire de la boucle while -->
                    <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>

                        <option>   <?= $employes['service'] ?></option>
                    <?php endwhile;  ?>
                </select>
            </div>
            <br>
        </form>
        <br>
</div>
<div id="resultat">
        <?php $result = $bdd->query("SELECT * FROM employes"); ?>
        <table class="table table-bordered text-center table-dark" ><tr>
            <?php for($i = 0; $i < $result->columnCount(); $i++): $colonne = $result->getColumnMeta($i); ?>

            <th><?= $colonne['name'] ?></th>

            <?php endfor; ?>

        </tr>
        <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <?php foreach($employes as $value): ?>
                <td><?= $value ?></td>

            <?php endforeach; ?>
        </tr>

            <?php endwhile; ?>

        </table>
     
    

    </div>    
</body>
</html>