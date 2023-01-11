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
    if (!isset($_COOKIE['nbvisites'])){
        setcookie('nbvisites', 0, time() + 3600);
    }
    
    if (isset($_COOKIE['nbvisites'])){      
        if (isset($_GET["reset"])){
            setcookie('nbvisites', 0, time() + 3600);
            echo $_COOKIE['nbvisites'];
            unset($_COOKIE["nbvisites"]);
        }
        else{
            $i = $_COOKIE['nbvisites'];
            $i++;
            setcookie('nbvisites', $i, time() + 3600);
            echo $_COOKIE['nbvisites'];
        }    
    }

    
    ?>

</html>