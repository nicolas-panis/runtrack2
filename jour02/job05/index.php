<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $var = TRUE;
        for($i = 1; $i <= 1000; $i++){
            for ($j = 2; $j < $i; $j++){
                if ($i % $j == 0){
                    $var = FALSE;
                }
            }
            if ($var != FALSE && $i != 1){
                echo $i;?><br /><?php
            }
            $var = TRUE;
        }
    ?>
</html>