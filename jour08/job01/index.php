<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">
        <input type = "submit" value = "reset" name = "reset"><br/>
    </form>

    <?php

    session_start();

    if (!isset($_SESSION["nbvisites"])){
        $_SESSION["nbvisites"] = 0;
    }
        
    if (isset($_SESSION["nbvisites"])){
        if (isset($_GET["reset"])){
            $_SESSION["nbvisites"] = 0;
            echo $_SESSION["nbvisites"];
            unset($_SESSION["nbvisites"]);
            session_destroy();
        }
        else{
            echo $_SESSION["nbvisites"];
            $_SESSION["nbvisites"]++;
        }        
    }

    
    ?>

</html>