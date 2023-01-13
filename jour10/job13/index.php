<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php 

    $mysqli = new mysqli("localhost", "root", "", "jour09");

    $sql = "SELECT salles.nom AS nomSalles, etage.nom AS nomEtage FROM salles INNER JOIN etage ON etage.id = salles.id_etage";
                
                $result = $mysqli->query($sql);

                ?>

                <table>
                    <thead>
                        <tr>
                            <?php

                            foreach($result->fetch_assoc() as $key => $value){
                                ?> <th> <?php echo $key ?> </th> <?php
                            }
                            ?>
                        </tr>
                        <?php

                $result = $mysqli->query($sql);

                while($row = $result->fetch_assoc()) {
                    $salles_nom = $row["nomSalles"];
                    $etage_nom = $row["nomEtage"];
                    
                    ?> 
                    <tr>
                        <td> <?php echo $salles_nom ?> </td>
                        <td> <?php echo $etage_nom ?> </td>
                    </tr>
                    <?php
                    //echo "prenom " . $prenom . " nom " . $nom . " naissance " . $naissance . " sexe " . $sexe . " mail " . $email;
                    //echo "<br />";
                }
    ?>


</html>