<?php
    $a = 1; $b = 2;
    if(!($a = false)){
        echo "é veradeiro <br>";
    }

    if(!($a > $b) && $a = $b){
        echo "é veradeiro 2";
    }

?>