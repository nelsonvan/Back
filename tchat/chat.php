<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="css/stylechat.css">
    <script src="chat.js"></script>
    <title>Mon chat en PHP/AJAX/JS</title>
</head>
<body>
    <div id="container">
        <h1>Mon chat en PHP/AJAX/JS</h1>
        <!-- statut ///////////////////////////////////////////////////////////// -->
        <table class="status"><tr>
                <td>
                        <span id="statusReponse"></span>
                        <select name="status" id="status" style="width:200px;" onchange="setStatus(this)">
                                <option value="0">Absent</option>
                                <option value="1">Occup&eacute;</option>
                                <option value="2" selected>En ligne</option>
                        </select>
                </td>
        </tr></table>
        
        <table class="chat"><tr>
                <!-- Zone de messages -->
                <td valign="top" id="text-id">
                        <div id="annonce"></div>
                        <div id="text">
                                <div id="loading">
                                        <center>
                                        <span class="info" id="info">Chargement de la page</span><br />
                                        <img src="img/Spinner-1s-200px.gif" alt="patientez..">
                                        
                                        </center>
                                </div>
                        </div>
                </td>
                
                <!-- colonne avec les membre connectés -->
                <td valign="top" id="users-td"><div id="users">Chargement</div></td>
        </tr></table>
        <!-- Zone de texte //////////////////////////////////////////////////////////// -->
                <a name="post"></a>
                <table class="post_message"><tr>
                        <td>
                        <form action="" method=""  onsubmit="envoyer(); return false;">
                                <input type="text" id="message" maxlength="255" />
                                <input type="button" onclick="envoyer()" value="Envoyer" id="post" />
                        </form>
                        <div id="responsePost" style="display:none"></div>
                        
                        </td>
                </tr></table>        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>