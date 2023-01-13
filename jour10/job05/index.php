<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php 

    $mysqli = new mysqli("localhost", "root", "", "jour09");

    $sql = "SELECT * FROM etudiants WHERE naissance <= 20050101";
                
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
                    $prenom = $row["prenom"];
                    $nom = $row["nom"];
                    $naissance = $row["naissance"];
                    $sexe = $row["sexe"];
                    $email = $row["email"];
                    
                    ?> 
                    <tr>
                        <td> <?php echo $id ?> </td>
                        <td> <?php echo $prenom ?> </td>
                        <td> <?php echo $nom ?> </td>
                        <td> <?php echo $naissance ?> </td>
                        <td> <?php echo $sexe ?> </td>
                        <td> <?php echo $email ?> </td>
                    </tr>
                    <?php
                    //echo "prenom " . $prenom . " nom " . $nom . " naissance " . $naissance . " sexe " . $sexe . " mail " . $email;
                    //echo "<br />";
                }
    ?>


</html>