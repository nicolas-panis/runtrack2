<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        /*for($i = 0; $i <= 1337; $i++){
            if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233){
                
            }
            else{
                echo $i ?> <br /> <?php
            }
        }*/

        $cpt = 0;
        while($cpt <= 1337){
            if ($cpt == 26 || $cpt == 37 || $cpt == 88 || $cpt == 1111 || $cpt == 3233){
                
            }
            else{
                echo $cpt ?> <br /> <?php
            }
            $cpt++;
        }
    ?>
</html>