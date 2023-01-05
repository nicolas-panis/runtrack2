<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <body>

        <form action="index.php" method="get">
            <label> Nom: <input type = "text" name = "nom" /> </label>
            <label> Prénom: <input type = "text" name = "prenom" /> </label>
            <label> Age: <input type = "text" name = "age" /> </label>
            <input type = "submit" value = "Envoyer" /><br />
        </form>

        <table style = "border: 1px solid black">

            <thead>
                    <tr>
                        <th style = "border: 1px solid black">Argument</th>
                        <th style = "border: 1px solid black">Valeur</th>
                    </tr>
                </thead>

            <?php ;
                foreach($_GET as $key => $value){
                    ?> <tr> <?php
                    
                        ?><td style = "border: 1px solid black"> <?php echo $key ?> </td> <?php

                        ?><td style = "border: 1px solid black"> <?php echo $value ?> </td> <?php
                }
            ?>

        </table>

    <body>

    
</html>