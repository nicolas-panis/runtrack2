<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php 

    $mysqli = new mysqli("localhost", "root", "", "jour09");

    $sql = "SELECT COUNT(*) AS 'Nombre etudiants' FROM etudiants";
                
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
                    $nb_etudiants = $row["Nombre etudiants"];                    
                    ?> 
                    <tr>
                        <td> <?php echo $nb_etudiants ?> </td>
                    </tr>
                    <?php
                    //echo "prenom " . $prenom . " nom " . $nom . " naissance " . $naissance . " sexe " . $sexe . " mail " . $email;
                    //echo "<br />";
                }
    ?>


</html>