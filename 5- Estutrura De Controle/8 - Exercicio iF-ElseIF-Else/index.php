<?php
    $velocidadeMotorista = 20;
    $multa = "Você está sendo multado por excesso de velocidade!";
    $aviso = "Cuidado!! Você está quase passando do limite de velocidade de 40km/h.";
    $velocidadePerfeita = "Siga viajem, sua velocidade está de acordo com limite de 40km/h!";

  if($velocidadeMotorista < 40){
    echo $velocidadePerfeita;
  } 
  else if($velocidadeMotorista == 40){
    echo $aviso;
  } else {
    echo $multa;
  }
?>
