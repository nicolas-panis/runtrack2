<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        for($i = 0; $i <= 100; $i++){
            if ($i >= 0 && $i <= 20){
                ?> <i> <?php echo $i; ?> </i> <?php 
            }
            else if ($i >= 25 && $i <= 50){
                if ($i == 42){
                    echo "La Plateforme_";
                }
                else{
                    ?> <u> <?php echo $i; ?> </u> <?php
                }
            }
            else{
                echo $i;
            }
            ?> <br /> <?php
        }
    ?>
</html>