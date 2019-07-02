<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="ajax3.js"></script>
  
    <title>03 AJAX DELETE</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">Supprimer un employé</h1><hr>

      
        <div id="message_supr"> <!-- cette div receptionne le message de validation aprées la suppression -->
            
            
            </div>
            <div id="employes"><!-- cette div sert a remplacer un slecteur initial par un selecteur mise a jour, c'est a dire sans l'employé supprimé et tout ca en instantané -->

            
                <?php
                    require_once('init.php');
                   
            
                    $result = $bdd->query("SELECT * FROM employes");

                    echo '<div class="form-group">';

                        echo '<select class="form-control"  id="personne" name="personne">';
                        while($employes = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            //echo '<pre>'; print_r($employes); echo '</pre>';
                            echo "<option value='$employes[id_employes]'>$employes[nom]</option>";
                        }
                        echo '</select>';

                    echo '</div>';    
                    
                ?>


            </div>
        <input type="submit" value="suprimer" id="submit" class="col-md-6 offset-md-3 btn btn-dark">
        </form>
    </div>


</body>
</html>