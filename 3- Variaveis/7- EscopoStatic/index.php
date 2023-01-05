<?php
   function testeSemStatic(){
    $a = 0;
    $a++;

    echo "$a <br>";
   } 
    testeSemStatic();
    testeSemStatic();
    testeSemStatic();

    echo "<br><br>";

   function testeStatic(){
    static $a = 0;
    $a++;

    echo "$a <br>";
   }
    testeStatic();
    testeStatic();
    testeStatic();
?>