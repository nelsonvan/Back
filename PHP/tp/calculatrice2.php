<?php
function compute()
{
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];

    switch($_POST['dropdown'])
    {
        case "Addition";
            $resultat_Add = $nombre1 + $nombre2;
            return $resultat_Add;
            break;
        case "Soustraction";
            $resultat_Sous = $nombre1 - $nombre2;
            return $resultat_Sous;
            break;
        case "Multiplication";
            $resultat_Mult = $nombre1 * $nombre2;
            return $resultat_Mult;
            break;
        case "Division";
            $resultat_Div = $nombre1 / $nombre2;
            return $resultat_Div;
            break;
        case "Modulo";
            $resultat_Mod = $nombre1 % $nombre2;
            return $resultat_Mod;
            break;
        default:
            echo 'Erreur';  


    }
}
        echo "Le resultat est: " . compute();
?>
<br>
<a href="calculatrice.php">Retour</a>