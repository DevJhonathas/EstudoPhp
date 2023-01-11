<?php
    //Força um tipo de valor  da variavel fique do tipo que a gente quiser 

    $Ciro = (int) "12";
    $DayOfMyBirthday = (string) 3;

    echo $Ciro;
    echo "<br>";
    echo $Ciro + 10;
    echo "<br>";
    
    if($Ciro === 12){
        echo '$Ciro é identico a 12, esté o tipo da variavel: ' . gettype($Ciro);
        echo "<br><br>";
    }

    if($DayOfMyBirthday === '3'){
        echo '$DayOfMyBirthday é identico a 3, esté o tipo da variavel: ' . gettype($DayOfMyBirthday);
    }
?>