<?php
    // > Simboliza que ele é maior
    // >= Simboliza que ele é maior ou igual
    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;

    if ($a > $b){
        echo "A > B = é maior que B <br><br>";
    } else {
        echo "A > B = Ele não é maior que B <br><br>";
    }

    if ($b > $a){
        echo "B > A = é maior que A <br><br>";
    } else {
        echo "B > A = Ele não é maior que A <br><br>";
    }

    if ($c >= $d){
        echo "C > D = é maior ou igual a D <br><br>";
    } else {
        echo "C > D = Ele não é maior ou igual D <br><br>";
    }
?>