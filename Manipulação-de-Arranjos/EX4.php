<?php
/* 
4.Escrever código que mostre os elementos de um arranjo fora da ordenação dos
índices dos elementos através do uso do “sort”.
*/
$carros = array("Mitsubishi", "Chevrolet", "Audi", "Porsche", "BMW", "Mercedes", "Land Rover");
sort($carros);

print_r($carros);
?>