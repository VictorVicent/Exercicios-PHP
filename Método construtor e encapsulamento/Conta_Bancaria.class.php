<?php
/*
8b. Criar uma classe Conta_Bancária.class, com dados bancários relativos à classe
Pessoa.class. Atualizar a aplicação Acessa_construtor para inserir e consultar dados
da conta bancária e pessoais do Sr. Willian. 
*/

class Conta_Bancaria
{
    private $agencia;
    private $numeroConta;
    private $saldo;

    public function __construct($agencia, $numeroConta, $saldo) {
        $this->agencia = $agencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function get_agencia() {
        return $this->agencia;
    }

    public function set_agencia($agencia) {
        $this->agencia = $agencia;
    }

    public function get_numeroConta() {
        return $this->numeroConta;
    }

    public function set_numeroConta($numeroConta) {
        $this->numeroConta = $numeroConta;
    }

    public function get_saldo() {
        return $this->saldo;
    }

    public function set_saldo($saldo) {
        $this->saldo = $saldo;
    }
    
}


?>