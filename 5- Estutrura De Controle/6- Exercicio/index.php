<?php
  $varFirstNumber = 146; 
  $varSecondNumber = 126;
  $varFirstString = "146";
  $varSecondString = "126";

  if(is_int($varFirstNumber)){
    echo "Passou a var " . $varFirstNumber . " é um " . gettype($varFirstNumber) . "<br><br>";

      if(is_int($varFirstString)){
        echo "Passou a var " . $varFirstString . " é um " . gettype($varFirstString) . "<br><br>";
      } else {
        echo "Esse segundo não erar um tipo int...<br><br>";
        if(is_int($varSecondNumber)){
          echo "Passou a var " . $varSecondNumber . " é um " . gettype($varSecondNumber) . "<br><br>";

          if(is_int($varSecondString)){
            echo "Passou a var " . $varSecondString . " é um " . gettype($varSecondString) . "<br><br>";
          } else {
            echo "Esse segundo não erar um tipo int...<br><br>";
          }
        }
      }
    }

?>
