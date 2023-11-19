<?php

// Funcionários e salários
$funcionarios_salarios = array(
    array("Lucio", 900.00),
    array("Edson", 800.00),
    array("Adriano", 1000.00),
    array("Cassio", 1300.00),
    array("Ronaldo", 900.00),
    array("Romario", 800.00),
    array("Ricardo", 1900.00),
    array("Rivaldo", 1200.00),
    array("Alison", 1300.00),
    array("Ederson", 700.00)
);

// Interpretar sobre cada par funcionário-salário e imprimir aqueles em que o salário é maior que R$1000.00
foreach ($funcionarios_salarios as $par) {
    if ($par[1] > 1000.00) {
        echo $par[0] . " - R$" . number_format($par[1], 2) . "\n";
    }
}

?>