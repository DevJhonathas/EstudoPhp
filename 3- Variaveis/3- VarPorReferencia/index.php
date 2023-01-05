<?php
    $x = 10;
    $y =& $x;
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    // Testando com a referencia 
    $y = 15;
    echo "Atrbiuição após o ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    // Testando com a referencia original
    $x = 20;
    echo "Atrbiuição após o ref 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    // Teste com string
    $nome = "Jhonathas";
    $nome2 =& $nome;
    echo "Realizando variaveis com ref com string";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
?>