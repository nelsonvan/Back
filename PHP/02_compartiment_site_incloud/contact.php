<?php
require_once("includ/header.php");
require_once("includ/nav.php");

/* 
    require et include : 
    Pas de différence entre les deux... sauf en cas d'erreur sur le nom du
    fichier :
    |   - include génére une erreur et continue l'execution du script
        - require génére une erreur et stop l'execution du script

    Le once verifie si le fichier a deja été inclus, si c'est le cas, il
    ne le ré-inclus pas.    
*/

?>    
       
        <section class="p-4 text-center border border-dark">  
             Voici le contenue de la page de contact<br>
             Voici le contenue de la page de contact<br>
             Voici le contenue de la page de contact<br>
             Voici le contenue de la page de contact<br>
             Voici le contenue de la page de contact<br>
        </section>

<?php
    require_once("includ/footer.php");
?>       