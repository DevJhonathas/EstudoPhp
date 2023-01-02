<?php
    $string = "teste";
    $float = 12.8;

    if(is_float($string)){
        echo "É um float! <br>";
    } 
    elseif(is_float($float)){
        echo "É um float! <br>";
    }
    elseif(12.14){
        echo "É um float! <br>";
    }  
    elseif("string"){
        echo "É um float! <br>";
    } 
    else {
        echo "Não é float"
    }
?>