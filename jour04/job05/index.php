<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="post">
        <label> Username: <input type = "text" name = "username" /> </label>
        <label> Password: <input type = "text" name = "password" /> </label>
        <input type = "submit" value = "Envoyer" /><br />
    
    </form>

        <?php 

            $i = false;

            foreach($_POST as $key => $value){
                if ($value == ''){
                    echo "Veuillez renseigner les champs";
                    break;
                }
                else {
                    $i = true;
                    break;
                }
            }

            if ($i == true){
                if( $_POST['username'] == 'John' && $_POST['password'] == 'Rambo'){
                    echo "C'est pas ma guerre";
                }
                else{
                    echo "Votre pire cauchemar";
                }
            }            
        ?>

</html>