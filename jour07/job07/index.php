<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>

    <form action="index.php" method="get">

        <input type = "text" name = "str" />
        <select name="fonction">
            <option value="">--Choisir une fonction--</option>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type = "submit" value = "Envoyer">Envoyer</button><br/>
    </form>

    <?php
        //$tabMaj = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

        function gras($str){
            $tabAlphabMaj = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
            for ($i = 0; isset($tabAlphabMaj[$i]); $i++){
                if ($str[0] == $tabAlphabMaj[$i]){
                    ?><b><?php echo $str;?></b><?php
                }
            }
        }

        function cesar($str, $decalage){
            $tabAlphabMaj = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
            $tabAlphab = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
            
            for ($i = 0; isset($str[$i]); $i++){
                for ($j = 0; isset(($tabAlphab[$j])); $j++){
                    if ($str[$i] == $tabAlphab[$j]){
                        if ($j + $decalage > 25){
                            echo $tabAlphab[$j+$decalage - 26];
                        }
                        else{
                            echo $tabAlphab[$j+$decalage];
                        }
                    }
                }
                for ($j = 0; isset(($tabAlphabMaj[$j])); $j++){
                    if ($str[$i] == $tabAlphabMaj[$j]){
                        if ($j + $decalage > 25){
                            echo $tabAlphabMaj[$j+$decalage - 26];
                        }
                        else{
                            echo $tabAlphabMaj[$j+$decalage];
                        }
                    }
                }
            }
        }

        function plateforme($str){
            if($str[-2] == "m" && $str[-1] == "e"){
                echo $str . "_";
            }
        }

        $decalage = 2;


        if(isset($_GET["str"])){
            $str = $_GET["str"];
            if ($_GET["fonction"] == "gras" && $_GET["str"] != ""){
                gras($str);
            }
            else if ($_GET["fonction"] == "cesar" && $_GET["str"] != ""){
                cesar($str, $decalage);
            }
            else if ($_GET["fonction"] == "plateforme" && $_GET["str"] != ""){
                plateforme($str);
            }
            
            
        }
        else{
            echo "Veuillez saisir une chaîne de caractère";
        }

        
        
    ?>

</html>