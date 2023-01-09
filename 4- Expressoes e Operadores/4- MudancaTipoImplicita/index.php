<?php
    echo 5 / 2; //gera um float 2.5
    echo "<br>";

    if(is_float(5/2)){
        echo "é float <br><br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)){
        echo "é uma string <br><br>";
    }

    $nome = "Jhonathas";
    $sobrenome = "Souza";

    $nomeCompleto = $nome . " " . $sobrenome;
    echo $nomeCompleto;
?>