<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        /*for($i = 0; $i <= 1337; $i++){
            if ($i == 42){
                ?> <b><u> <?php echo $i; ?> </u></b> 
            <?php
            }
            else{
                echo $i;
            }
            ?><br /><?php
        }*/

        $cpt = 0;
        while($cpt <= 1337){
            if ($cpt == 42){
                ?> <b><u> <?php echo $cpt; ?> </u></b> 
            <?php
            }
            else{
                echo $cpt;
            }
            ?><br /><?php
            $cpt++;
        }
    ?>
</html>