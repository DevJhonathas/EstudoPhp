<?php
    // < Simboliza que ele é menor
    // <= Simboliza que ele é menor ou igual
    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;

    if ($a < $b){
        echo "A > B = é menor que B <br><br>";
    } else {
        echo "A > B = Ele não é menor que B <br><br>";
    }

    if ($b < $a){
        echo "B < A = é menor que A <br><br>";
    } else {
        echo "B < A = Ele não é menor que A <br><br>";
    }

    if ($c >= $d){
        echo "C < D = é menor ou igual a D <br><br>";
    } else {
        echo "C < D = Ele não é menor ou igual D <br><br>";
    }
?>