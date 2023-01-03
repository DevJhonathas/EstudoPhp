<?php
    class Pessoa{
        function falar(){
            echo "Ola pessoal";
        }
    }

$jhonathas = new Pessoa();
$jhonathas->nome = "Jhonathas"; //Definindo uma propriedade nome
echo $jhonathas->nome;
echo "<br>";
$jhonathas->falar(); //Invoncando o metodo falar
?>