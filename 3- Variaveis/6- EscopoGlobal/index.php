<?php
    $teste = "Teste Global";
    echo $teste." antes de mudar no escopo <br>";
    function funcaoLocal(){
        $teste = "Teste Local";

        echo "$teste <br>";
    }

    function funcaoGlobal(){
        global $teste;
        $teste = "Teste Global mudadado no escopo";
        echo "$teste global <br>";
    }

funcaoLocal();
funcaoGlobal();
?>