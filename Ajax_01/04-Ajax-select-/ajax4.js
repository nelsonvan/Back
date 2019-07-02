$(document).ready(function(){

    var prenom = $('#personne').text(); // On récupere le contenue de la div, qui sera envoyé comme paramétre AJAX 'aller'
    console.log(prenom);

    var parameters = "prenom="+prenom; // on défiit les paramétres
    console.log(parameters);
    // la reponse de la requete 'retour' AJAX se trouve dans 'data'
    $.post('ajax4.php', parameters, function(data){
        $('#resultat').html(data.resultat);// on selectionne la div id 'resultat' pour coller le tableaux ($tab['resultat'] définit dans la page ajax4.php)
    }, 'json');

});  