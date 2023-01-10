<?php

    function calcul($a, $operation, $b){
        $result = 0;

        if ($operation == "+"){
            $result = $a + $b;
        }
        else if ($operation == "-"){
            $result = $a - $b;
        }
        else if ($operation == "*"){
            $result = $a * $b;
        }
        else if ($operation == "/"){
            $result = $a / $b;
        }

        return $result;
    }

    $a = 1;
    $b = 2;
    $operation = "/";
    echo calcul($a, $operation, $b);
    
?>