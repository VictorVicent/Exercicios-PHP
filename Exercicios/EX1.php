<?php
/*
Exercício 1: Escrever código que possua uma função que receba como argumentos o nome e o 
salário de funcionários de uma empresa. A aplicação deve imprimir em cada linha o nome e o 
respectivo salário dos funcionários (pelo menos 3).
*/

function Mostrar($funcionarios, $salario){
    echo($funcionarios. " " .$salario);
    echo nl2br("\n");
}

Mostrar("Ingrid", "R$10000");

Mostrar("Vinicius", "R$2000");

Mostrar("Marcos", "R$1000");

?>