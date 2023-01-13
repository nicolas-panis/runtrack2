<?php

    session_start();
    

    if (isset($_GET['connexion'])){

        setcookie('prenoms', $_GET['prenom'], time() + 3600);

        if (isset($_COOKIE['prenoms'])){
            if ($_COOKIE['prenoms'] == $_GET['prenom']){
                echo "Bonjour " . $_GET['prenom'];
                ?><form action='index.php' method= 'get'>
                    <button type = 'submit' value = 'Envoyer' name = 'deco'>Déconnexion</button>
                </form><?php
            }
            else{
                ?><form action='index.php' method= 'get'>
                    <input type = 'text' name = 'prenom'>
                    <button type = 'submit' value = 'Envoyer' name = 'connexion'>Connexion</button>
                </form><?php
            }
            
        } 
        else{
            ?><form action='index.php' method= 'get'>
                <input type = 'text' name = 'prenom'>
                <button type = 'submit' value = 'Envoyer' name = 'connexion'>Connexion</button>
            </form><?php
        }
    }

    else{
        ?><form action='index.php' method= 'get'>
            <input type = 'text' name = 'prenom'>
            <button type = 'submit' value = 'Envoyer' name = 'connexion'>Connexion</button>
        </form><?php
    }

    if (isset($_GET['reset'])){
        unset($_SESSION['prenom']);
        session_destroy();
    }
    
?>



<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">
        <input type = "text" name = "prenom">
        <button type = "submit" value = "Envoyer" name = "connexion">Connexion</button>
    </form>

</html>