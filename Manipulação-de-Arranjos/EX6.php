<?php
/* 
6.Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos do mesmo através do uso do “array_slice” .
*/
$carros = array("Mitsubishi", "Chevrolet", "Audi", "Porsche", "BMW", "Mercedes", "Land Rover");

$carros_slice = array_slice($carros, 2);

print_r($carros_slice);

?>