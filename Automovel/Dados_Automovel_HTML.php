<?php
include_once 'Automovel.class.php';

//criação da variavel de instancia do tipo da classe
$Automovel = new Automovel;

//atrivuição dos valores
$Automovel->set_marca($_POST["marca"]);
$Automovel->set_cor($_POST["cor"]);
$Automovel->set_modelo($_POST["modelo"]);
$Automovel->set_preco($_POST["preco"]);


//retorno dos valores
echo nl2br($Automovel->get_marca()."\n");
echo nl2br($Automovel->get_cor()."\n");
echo nl2br($Automovel->get_modelo()."\n");
echo nl2br($Automovel->get_preco()."\n");

?>