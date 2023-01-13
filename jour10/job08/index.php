<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php 

    $mysqli = new mysqli("localhost", "root", "", "jour09");

    $sql = "SELECT SUM(capacite) AS 'Capacite totale' FROM salles";
                
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
                    $capacite_totale = $row["Capacite totale"];
                    
                    ?> 
                    <tr>
                        <td> <?php echo $capacite_totale ?> </td>
                    </tr>
                    <?php
                    //echo "prenom " . $prenom . " nom " . $nom . " naissance " . $naissance . " sexe " . $sexe . " mail " . $email;
                    //echo "<br />";
                }
    ?>


</html>