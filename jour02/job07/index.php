<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $hauteur = 5;

        /*for($cpt = 0; $cpt <= $hauteur; $cpt++){
            for ($espace = 0; $espace < $hauteur -1; $espace++){
                echo "_";
            }
            $hauteur--;
           ?><br /><?php
        }*/

        $cpt = 0;
        $space = 0;
        $cptboucle = 0;
        while($hauteur > 0){
            while($cpt < $hauteur - 1){
                //echo "_";                     Si on ne veut pas utiliser la ligne du dessous
                echo '&nbsp';
                $cpt++;
            }
            echo "/";
            if ($hauteur == 1){
                $space = $space/2;
                while ($space > 0){
                    echo "_";
                    $space--;
                }
            }
            else{
                while($space != 0){
                    //echo "_";                 Si on ne veut pas utiliser la ligne du dessous
                    echo '&nbsp';
                    $space--;
                }
            }

            
            echo "\\";
            $cptboucle++;
            $space = $cptboucle*2;
            $hauteur--;
            ?><br /><?php
            $cpt = 0;
        }
    ?>
</html>