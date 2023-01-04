<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $tab = array('200', '204', '173', '98', '171', '404', '459');
        $i = 0;

        while(isset($tab[$i])){
            if ($tab[$i] % 2 == 0){
                echo "$tab[$i]"; ?> est paire <br /> <?php
            }
            else{
                echo "$tab[$i]"; ?> est impaire <br /> <?php
            }
            $i++;
        }
    ?>
</html>