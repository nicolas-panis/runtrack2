<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">

        <select name="style" id="pet-select">
        <option value="">--Choisir un style--</option>
        <option value="style1">Style1</option>
        <option value="style2">Style2</option>
        <option value="style3">Style3</option>
        <input type = "submit" value = "Envoyer" /><br />
        </select>
    </form>

    <br />

    <?php

        $i = false;
        foreach($_GET as $key => $value){
            if ($value == ''){
                break;
            }
            else {
                    $i = true;
                break;
            }
        }

        if ($i == true){

            if ($_GET['style'] == "style1"){
                ?><link rel="stylesheet" href="style1.css"><?php
            }

            else if ($_GET['style'] == "style2"){
                ?><link rel="stylesheet" href="style2.css"><?php
            }
            else if ($_GET['style'] == "style3"){
                ?><link rel="stylesheet" href="style3.css"><?php
            }
        }
        
    ?>

</html>