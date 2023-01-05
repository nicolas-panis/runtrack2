<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">
        <label> Largeur: <input type = "text" name = "largeur" /> </label>
        <label> Hauteur: <input type = "text" name = "hauteur" /> </label>
        <input type = "submit" value = "Envoyer" /><br />
    </form>

    <?php

        $i = false;
        foreach($_GET as $key => $value){
            if ($value == ''){
                echo "Veuillez renseigner les champs";
                break;
            }
            else {
                    $i = true;
                break;
            }
        }

        if ($i == true){
            $hauteur = $_GET['hauteur'];
            $largeur = $_GET['largeur'];

            $cpt = 0;
            $space = 0;
            $cptboucle = 0;
            while($hauteur > 0){
                while($cpt < $hauteur * 2 - 1){
                    //echo "_";                     Si on ne veut pas utiliser la ligne du dessous
                    echo '&nbsp';
                    $cpt++;
                }
                echo "/";
                $largeur = $cptboucle;
                if ($hauteur == 1){
                    /*while ($space > 0){
                        echo "_";
                        $space--;
                    }*/
                    for($i = 0; $i < $_GET['largeur'] - 2; $i++){
                        echo "_";
                    }
                }
                else{
                    $largeur = $largeur * 2;
                    while($largeur != 0){
                        echo "_";                 //Si on ne veut pas utiliser la ligne du dessous
                        //echo '&nbsp';
                        $largeur--;
                    }
                }
                echo "\\";
                $cptboucle++;
                
                $hauteur--;
                ?><br /><?php
                $cpt = 0;
            }    

            for($j = 0; $j < $_GET['hauteur']; $j++){
                echo "|"; 
                for($k = 1; $k < $_GET['largeur']*2; $k++){
                    echo '&nbsp';
                }
                echo "|";
                ?> <br /><?php
                
            }
            
            for($i = 0; $i < $_GET['largeur']; $i++){
                echo "_";
            }
        
        }
    ?>

</html>