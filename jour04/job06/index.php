<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">
        <label> Nombre: <input type = "text" name = "nombre" /> </label>
        <input type = "submit" value = "Envoyer" /><br />
    </form>

    <?php

        $i = false;
        foreach($_GET as $key => $value){
            if ($value == ''){
                echo "Veuillez renseigner le champs";
                break;
            }
            else {
                    $i = true;
                break;
            }
        }

        if ($i == true){
            if ($_GET['nombre'] % 2 == 0){
                echo "Nombre pair";
            }
            else{
                echo "Nombre impair";
            }
        
        }
    ?>

</html>