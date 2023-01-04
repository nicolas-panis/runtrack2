<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";

        $i = 0;

        while (isset($str[$i])){
            if ($i % 2 == 0){
                echo $str[$i];
            }
            $i++;
        }
    ?>
</html>