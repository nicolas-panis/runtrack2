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

    $str = "Test";
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
                <td>". gettype($myBool) ."</td>
                <td>myBool</td>
                <td>$myBool</td>
            </tr>
            <tr>
                <td>". gettype($myBool2) ."</td>
                <td>myBool2</td>
                <td>$myBool2</td>
            </tr>

            <tr>
                <td>". gettype($myInteger) ."</td>
                <td>myInteger</td>
                <td>$myInteger</td>
            </tr>
            <tr>
                <td>". gettype($myInteger2) ."</td>
                <td>myInteger2</td>
                <td>$myInteger2</td>
            </tr>

            <tr>
                <td>". gettype($str) ."</td>
                <td>str</td>
                <td>$str</td>
            </tr>
            <tr>
                <td>". gettype($str2) ."</td>
                <td>str2</td>
                <td>$str2</td>
            </tr>

            <tr>
                <td>". gettype($float) ."</td>
                <td>float</td>
                <td>$float</td>
            </tr>
            <tr>
                <td>". gettype($float2) ."</td>
                <td>float2</td>
                <td>$float2</td>
            </tr>
        </table>

    ";

    /*$array = get_defined_vars();
    //var_dump($array["_FILES"]);
    var_dump($array);
    */
    ?>
</html>