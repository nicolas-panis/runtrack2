<?php

    function bonjour($jour){
        if ($jour == true){
            echo "Bonjour";
        }
        else{
            echo "Bonsoir";
        }
    }

    $jour = false;
    bonjour($jour);
?>