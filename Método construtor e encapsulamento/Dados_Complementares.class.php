<?php
/*
8a. Criar uma classe Dados_Complementares.class, com dados adicionais da classe
Pessoa.class. Utilizar a aplicação Acessa_construtor para inserir e consultar os
dados pessoais já existentes e complementares do Sr. Willian.
*/

class Dados_Complementares
{
    private $endereco;
    private $estado_civil;
    private $grau_instrução;

    public function __construct($endereco, $estado_civil, $grau_instrucao)
   {
    $this->endereco = $endereco;
    $this->estado_civil = $estado_civil;
    $this->grau_instrucao = $grau_instrucao;
   }

   public function get_endereco()
   {
    return $this->endereco;
   }
   public function get_estado_civil ()
   {
    return $this->estado_civil;
   }
   public function get_grau_instrucao ()
   {
    return $this->grau_instrucao;
   }
}
?>