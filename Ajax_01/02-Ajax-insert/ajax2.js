$(document).ready(function(){
        // On selectionne les bouton submit auquel on associe l'événement 'click'
        // 'event représente l'événement 'click
    $("#submit").click(function(event){
        event.preventDefault(); // preventDefault fonction prédefinfit permet d'annuler le comportement du bouton qui a pour role de recharger le code de la page
        ajax(); // fonction utilisateur executée ci-dessous
    });

    function ajax()
    {
        var personne = $('#personne').val(); // on séléctionne les champs input afin de récuperer la valeur saisie dans le champs pour la transmettre a la requete 'aller' AJAX
        console.log(personne);

        var parameters = "personne="+personne; // on définit le paramétres a envoyer avec la requete aller AJAX "personne=" permet de definir ou le paramétre va étre envoyé dans le fichier PHP
        console.log(parameters);
        // la méthode post de Jquery permet d'envoyer des requetes HTTP AJAX, plusieurs paramétres
        /*
            1. L'URL de destination des requetes AJAX
            2. Les paramétres a fournir a la requéte
            3. En cas de succés, function(data) récupere les données de la requete 'retour' tout se trouve dans 'data'
            4. Type de transport de données : JSON
        */ 
        
        $.post("ajax2.php", parameters, function(data){
            $('#resultat').html(data.resultat); // ici on selectionne la div id 'resultat' est on accroche le message de d'erreur ou de validation a l'interieur
            // data.resultat --> resultat correspond a l'ince 'resultat' du tableau array $tab['resultat] du fichier ajax2.php
            $('#personne').val(''); // permet de vider le champs input une fois le formulaire valide

        }, 'json');
    }
    
});