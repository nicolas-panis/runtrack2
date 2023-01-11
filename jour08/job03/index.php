<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">
        <input type = "text" name = "prenom">
        <button type = "submit" value = "Envoyer" name = "envoi">Envoyer</button>
        <input type = "submit" value = "reset" name = "reset"><br/>
    </form>

    <?php

    session_start();
        
    if (isset($_GET["envoi"])){
        $_SESSION['prenoms'][] = $_GET["prenom"];
        if (isset($_SESSION['prenoms'])){
            foreach($_SESSION['prenoms'] as $value){
            echo $value;
            ?> <br /> <?php
            }
        }
    }

    if (isset($_GET["reset"])){
        unset($_SESSION['prenom']);
        session_destroy();
    }
    
    ?>

</html>