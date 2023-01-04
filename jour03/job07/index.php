<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $str2 = $str;

        $i = 0;
        while (isset($str[$i])) $i++;
         
        //$i--;               //On enlève une valeur qui correspond à la fin de la boucle donc qu'il n'y a plus de valeur dans la chaîne
        //$i = $j;

        /*while($i >= 0){
            $str2[$j-1] = $str[$i];
            $i--;
            $j--;
        }*/

        for ($i--; $i >=0; $i--){
            $j = $i;
            $str2[$j-1] = $str[$i];
            $j--;
        }
        
        echo $str2;
    ?>
</html>