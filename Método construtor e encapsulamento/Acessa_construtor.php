<?php
/*
8a. Criar uma classe Dados_Complementares.class, com dados adicionais da classe
Pessoa.class. Utilizar a aplicação Acessa_construtor para inserir e consultar os
dados pessoais já existentes e complementares do Sr. Willian.
*/

include_once 'Pessoa.class.php';
include_once 'Dados_Complementares.class.php';
include_once 'Conta_Bancaria.class.php';

//criação do objeto
$Willian = new Pessoa(100304, "Patrick Willian", 1.75, 19, "03/05/1974", "1° ano faculdade", 756.99);

$Complemento  = new Dados_Complementares("Rua B n° 20, Jardim Itatins - Peruibe/SP", "solteiro", "2° grau tecnico");

$ContaBancaria  = new Conta_Bancaria("0001-9", 00012345-0, "5.000");

//manipulação do objeto
echo nl2br ("Nome:"."\t".$Willian->get_nome()."\n");
echo nl2br ("Código:"."\t".$Willian->get_codigo()."\n");
echo nl2br ("Idade:"."\t".$Willian->get_idade()."\n");
echo nl2br ("Altura:"."\t".$Willian->get_altura()."\n");
echo nl2br ("Nascimento:"."\t".$Willian->get_nascimento()."\n");
echo nl2br ("Escolaridade:"."\t".$Willian->get_escolaridade()."\n");
echo nl2br ("Salario:"."\t".$Willian->get_salario()."\n");

echo nl2br ("\nDADOS COMPLEMENTARES\n");
echo nl2br ("Endereco:"."\t".$Complemento->get_endereco()."\n");
echo nl2br ("Estado civil:"."\t".$Complemento->get_estado_civil()."\n");
echo nl2br ("Grau de instrução:"."\t".$Complemento->get_grau_instrucao()."\n\n");

echo nl2br ("\nCONTA BANCÁRIA\n");
echo nl2br ("Agencia:"."\t".$ContaBancaria->get_agencia()."\n");
echo nl2br ("Número da Conta:"."\t".$ContaBancaria->get_numeroConta()."\n");
echo nl2br ("Saldo:"."\t".$ContaBancaria->get_saldo()."\n\n");

?>
