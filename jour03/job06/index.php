<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $str = "Les choses que l'on possede finissend par nous posseder";
        $str2 = "";

        $i = 0;
        while(isset($str[$i])){
            $i++;
        }
        $i--;           //On enlève une valeur qui correspond à la fin de la boucle donc qu'il n'y a plus de valeur dans la chaîne

        $j = 0;
        while ($i >= 0){
            $str2[$j] = $str[$i];
            $j++;
            $i--;
        }
        echo $str2;
    ?>
</html>