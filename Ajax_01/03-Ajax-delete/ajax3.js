$(document).ready(function(){
    $('#submit').click(function(event){
        event.preventDefault();
        ajax(); // Pour chaque cliick sur le bouton on execute la fonction ajax() ci-dessous
    });

    function ajax()
    {
        var id = $('#personne').val(); // On selectionne le selecyeur id 'personne' afin de récuperer l'id de l'employé selectionn"
        console.log(id);

        var parameters = "id="+id; // on défint les paramétres a envoyer a la requete AJAX 'aller' qui sera trasmit a la requete de supression
        console.log(parameters);

        /*
            post : methode JQUERY permettant d'envoyer des requetes AJAX en HTTP :
            arguments : 
            1. L'URL de déstination des requetes AJAX
            2. Les paraétres envoyés avec la requetes AJAX 'aller'
            3. En cas de succés on receptionne le résultat de la requete AJAX 'retour'
            4. Type de transport de données 'JSON'
         */

        $.post('ajax3.php', parameters, function(data){ // On definit lers paramétres a envoyer a la requete AJAX 'aller' qui serez transmit a la requete de suppression PHP dans le fichier ajax3.php
            $('#employes').html(data.resultat);// on selectionne la div id 'employes' et on remplace le selecteur initial par le selecteur mis a jour, on écrase un selecteur par un autre
            $('#message_supr').html(data.message_supr);// On selectionne la div id 'message_supr' affin d'envoyer via la requete AJAX 'retour' le message de validation

        }, 'json');
    }
});