<?php
  // ele analisa a variavel e permite realizar alguns case, que são casos que você pode definir
  // Podemos por a instrução break para ela não executar mais
  // Podemos tbm adicionar instrução default, que é executada caso nenhuma condição seja satisfeita;
// Para quer usar switch? Em caso de vericação. Evitando criar um monstro de IF
  $x = -1;

  switch($x){
    case 0:
      echo "X é igual 0 <br><br>";
      break;
    case 1:
      echo "X é igual 1 <br><br>";
      break;
    case 2:
      echo "X é igual 2 <br><br>";
      break;
    default:
      echo "X não é igual a nenhum dos valores mencionados <br>";
  }
?>
