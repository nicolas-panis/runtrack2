<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $largeur = 20;
        $hauteur = 10;

        for($i = 0; $i < $largeur; $i++){
            echo "_";
        }
        ?> <br /><?php

        for($j = 0; $j < $hauteur; $j++){
            echo "|"; 
            for($k = 1; $k < $largeur*2; $k++){
                echo '&nbsp';
            }
            echo "|";
            ?> <br /><?php
        }
        for($i = 0; $i < $largeur; $i++){
            echo "_";
        }
    ?>
</html>