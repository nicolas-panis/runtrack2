<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="post">
        <input type = "text" name = "nom" />
        <input type = "text" name = "prenom" />
        <input type = "text" name = "age" />
        <input type = "submit" value = "Envoyer" /><br />

        <?php 
            $i = 0;
            foreach($_POST as $key => $value){
                $i++;
            }
            
            echo "Le nombre d'argument POST envoyé est: $i";
        ?>

    </form>
</html>