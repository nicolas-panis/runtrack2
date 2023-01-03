<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <?php
        for($i = 0; $i <= 100; $i++){
            if ($i % 3 == 0 && $i % 5 == 0){
                echo "FizzBuzz";
            }
            else if ($i % 3 == 0){
                echo "Fizz";
            }
            else if ($i % 5 == 0){
                echo "Buzz";
            }
            else{
                echo $i;
            }
            ?><br /><?php
        }
    ?>
</html>