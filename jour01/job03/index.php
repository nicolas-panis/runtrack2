<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php

    $myBool = true;
    $myBool2 = true;

    $myInteger = 64;
    $myInteger2 = 128;

    $str = "test";
    $str2 = "Test2";

    $float = 49.1;
    $float2 = 49.2;

    echo "Tableau de variables<br><br>";

    echo "
        <table>
            <tr>
                <td>Type</td> 
                <td>Nom</td>
                <td>Valeur</td>
            </tr>

            <tr>
                <td>Booléen</td>
                <td>myBool</td>
                <td>$myBool</td>
            </tr>
            <tr>
                <td>Booléen</td>
                <td>myBool2</td>
                <td>$myBool2</td>
            </tr>

            <tr>
                <td>Entier</td>
                <td>myInteger</td>
                <td>$myInteger</td>
            </tr>
            <tr>
                <td>Entier</td>
                <td>myInteger2</td>
                <td>$myInteger2</td>
            </tr>

            <tr>
                <td>Chaîne de caractères</td>
                <td>str</td>
                <td>$str</td>
            </tr>
            <tr>
                <td>Chaîne de caractères</td>
                <td>str2</td>
                <td>$str2</td>
            </tr>

            <tr>
                <td>Nombre à virgule</td>
                <td>float</td>
                <td>$float</td>
            </tr>
            <tr>
                <td>Nombre à virgule</td>
                <td>float2</td>
                <td>$float2</td>
            </tr>
        </table>
    "
    ?>

</html>