<?php

    function occurrences($str, $char){
        $result = 0;
        for ($i = 0; isset($str[$i]); $i++){
            if ($str[$i] == $char){
                $result++;
            }
        }
        return $result;
    }

    $str = "Bonjour";
    $char = "o";
    echo occurrences($str, $char);
    
?>