<?php
   $varInt = 12;
   $varString = "12";
   $varDouble = 12.5;
   
   if(is_int($varInt)){
    echo "Essa variavel é um " . gettype($varInt) . ", Aprovado!!!<br><br>";
   } else {
    echo "Essa var não está aprovadar pois é uma " . gettype($varInt) . ", Reprovado!!!<br><br>";
   }
  
   if(is_int($varString)){
    echo "Essa variavel é um " . gettype($varString) . ", Aprovado!!!<br><br>";
   } else {
    echo "Essa var não está aprovadar pois é uma " . gettype($varString) . ", Reprovado!!!<br><br>";
   }

   if(is_int($varDouble)){
    echo "Essa variavel é um " . gettype($varDouble) . ", Aprovado!!!<br><br>";
   } else {
    echo "Essa var não está aprovadar pois é uma " . gettype($varDouble) . ", Reprovado!!!<br><br>";
   }
?>
