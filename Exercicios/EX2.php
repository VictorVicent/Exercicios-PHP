<?php
/*
Exercício 2: Escrever outra versão do código proposto acima, sendo que tanto os nomes 
quanto os salários estejam originalmente em arranjos.
*/

$funcionarios = array("Ingrid", "Vinicius", "Marcos");
$salario = array("R$10000", "R$2000", "R$1000");

function Mostrar($funcionarios, $salario){
    for($i = 0; $i < 3; $i++){
        echo($funcionarios[$i]. " ".$salario[$i].".");
        echo nl2br("\n");
    }
}

Mostrar($funcionarios, $salario);

?>