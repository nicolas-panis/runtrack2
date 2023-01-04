<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $str2 = "";

        /*while (isset($str[$i])) $i++;
        

        for ($i = $i-1; $i >= 0; $i--){
            $str2[$i - 1] = $str[$i];
        }*/

        for ($i = 0; isset($str[$i]); $i++){
            if (isset($str[$i+1]) == FALSE){
                $str2[$i] = $str[0];
            }
            else{
                $str2[$i] = $str[$i+1];
            }
        }
        echo $str2;
    ?>
</html>