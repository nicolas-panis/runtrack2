<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php 

    $mysqli = new mysqli("localhost", "root", "", "jour09");

    $sql = "SELECT * FROM `salles` ORDER BY capacite DESC";
                
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
                    $id = $row["id"];
                    $nom = $row["nom"];
                    $id_etage = $row["id_etage"];
                    $capacite = $row["capacite"];
                    
                    ?> 
                    <tr>
                        <td> <?php echo $id ?> </td>
                        <td> <?php echo $nom ?> </td>
                        <td> <?php echo $id_etage ?> </td>
                        <td> <?php echo $capacite ?> </td>
                    </tr>
                    <?php
                    //echo "prenom " . $prenom . " nom " . $nom . " naissance " . $naissance . " sexe " . $sexe . " mail " . $email;
                    //echo "<br />";
                }
    ?>


</html>