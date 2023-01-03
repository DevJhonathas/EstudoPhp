<?php
    //Crie um if checando se o array assoativo de uma pessoa é maior de idade e imprima uma mensagem, caso seja.
    $arrAsso = [
        'Nome' => 'Jhonathas', 
        'idade' => 19,
        'profissao' => 'programador',
        'gosta' => 'Jogar'
    ];

    $maiorIdade = 18;

    if ($arrAsso['idade'] > $maiorIdade){
        echo 'Maior de idade';
    }
    else{
        echo "Menor de idade";
    }
?>