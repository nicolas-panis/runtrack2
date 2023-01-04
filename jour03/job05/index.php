<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

        $dic = [
            "consonnes" => "",
            "voyelles" => "",
        ];

        ?> 
        <table style = "border: 1px solid black"> 
            <thead>
                <tr>
                    <th style = "border: 1px solid black">Consonnes</th>
                    <th style = "border: 1px solid black">Voyelles</th>
                </tr>
            </thead>
        <?php

        $i = 0;

        $j = 0;
        $k = 0;

        while (isset($str[$i])){
            if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' || $str[$i] == 'A' || $str[$i] == 'E' || $str[$i] == 'I' || $str[$i] == 'O' || $str[$i] == 'U' || $str[$i] == 'Y'){
                $dic[1][$j] = $str[$i];
                $j++;
            }
            else if( ($str[$i] != ' ') && $str[$i] != "'"){
                $dic[0][$k] = $str[$i];
                $k++;
            }
            $i++;
        }    

        $cptvoy = 0;
        while (isset($dic[1][$cptvoy])){
            $cptvoy++;
        }
        
        $cptcons = 0;
        while (isset($dic[0][$cptcons])){
            $cptcons++;
        }

        ?> 

        <tr>
            <td style = "border: 1px solid black"> <?php echo $cptcons ?></td>
            <td style = "border: 1px solid black"> <?php echo $cptvoy ?></td>
        </tr>

        <?php

        /* Afficher toutes les voyelles et consonnes dans le tableau
        $l = 0;
        while (isset($dic[0][$l]) || isset($dic[1][$l]))
        {
            ?>
            
            <tr>
                <?php
                if (isset($dic[0][$l])){
                    ?><td style = "border: 1px solid black"> <?php echo $dic[0][$l] ?> </td> <?php
                }
                else{
                    ?><td style = "border: 1px solid black"> Vide</td> <?php
                }
                ?> 
                <?php
                if (isset($dic[1][$l])){
                    ?><td style = "border: 1px solid black"> <?php echo $dic[1][$l] ?> </td> <?php
                }
                else{
                    ?> <td style = "border: 1px solid black"> Vide</td><?php
                }?>
            </tr>

            <?php
            $l++;
        }
        */
    ?>

    </table>
</html>