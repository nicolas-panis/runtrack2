<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        $str = "Dans l'espace, personne ne vous entend crier";

        $i = 0;
        while (isset($str[$i])){
            $i++;
        }
        echo "Nombre de caractères: $i"
    ?>
</html>