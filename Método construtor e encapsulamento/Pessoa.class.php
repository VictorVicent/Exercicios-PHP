<?php
/*
8a. Criar uma classe Dados_Complementares.class, com dados adicionais da classe
Pessoa.class. Utilizar a aplicação Acessa_construtor para inserir e consultar os
dados pessoais já existentes e complementares do Sr. Willian.
*/

class Pessoa
{
private $codigo;
private $nome;
private $altura;
private $idade;
private $nascimento;
private $escolaridade;
private $salario;

//metodo construtor
function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario){
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->altura = $altura;
    $this->idade = $idade;
    $this->nascimento = $nascimento;
    $this->escolaridade = $escolaridade;
    $this->salario = $salario;
}
public function get_codigo(){
    return $this->codigo;}

public function get_nome(){
    return $this->nome;}

public function get_altura(){
    return $this->altura;}

public function get_idade(){
    return $this->idade;}

public function get_nascimento(){
    return $this->nascimento;}

public function get_escolaridade(){
    return $this->escolaridade;}

public function get_salario(){
    return $this->salario;}

//metodo destrutor
function __destrutor()
{echo "Objeto {$this->nome} finalizado...<br>\n";}
}
?>