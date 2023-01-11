<?php
    if(5 > 10 && 10 > 5) { //false e true com AND
        echo "Entrou no if 1 com AND <br>";
    }

    if(5 < 10 && 5 >= 5) { //true e true com AND
        echo "Entrou no if 2  com AND<br>";
    }

    if(5 > 10 || 10 > 5) { //false e true com OR
        echo "Entrou no if 1 com OR <br>";
    }

    if(5 > 10 || 10 < 5) { //false e false com OR
        echo "Entrou no if 2 com OR <br>";
    }

    $a = 2;
    $b = 3;
    $c = 4;
    $d = 5;
   if(($b <= $a || $c >= $d) || $a < $b){
        echo "Entrou no if 2 <br>";
   }
?>