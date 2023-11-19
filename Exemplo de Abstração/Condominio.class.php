<?php
/*
7a. Escrever código que represente a abstração de um condomínio, com atributos
pertinentes e os respectivos métodos set( ) e get( ) para inserir e retornar os valores
dos atributos.
*/

class Condominio
{
    //Atributos
    private $nomeCond;
    private $enderecoCond;
    private $valorCondominio;
    private $numCasas;
    private $vagasGaragem;
    private $quantidadeMoradores;

    public function __construct($nomeCond, $enderecoCond, $valorCondominio, $numCasas, $vagasGaragem, $quantidadeMoradores) {
        $this->nomeCond = $nomeCond;
        $this->enderecoCond = $enderecoCond;
        $this->valorCondominio = $valorCondominio;
        $this->numCasas = $numCasas;
        $this->vagasGaragem = $vagasGaragem;
        $this->quantidadeMoradores = $quantidadeMoradores;
    }

    /* métodos inserir e retornar valores dos atributos: set() e get().*/
    public function set_nomeCond($nomeCond)
    {
        $this->nomeCond = $nomeCond;
    }
    public function get_nomeCond()
    {
        return $this->nomeCond;
    }

    public function set_enderecoCond($enderecoCond)
    {
        $this->enderecoCond = $enderecoCond;
    }
    public function get_enderecoCond()
    {
        return $this->enderecoCond;
    }

    public function set_valorCondominio($valorCondominio)
    {
        $this->valorCondominio = $valorCondominio;
    }
    public function get_valorCondominio()
    {
        return $this->valorCondominio;
    }

    public function set_numCasas($numCasas)
    {
        $this->numCasas = $numCasas;
    }
    public function get_numCasas()
    {
        return $this->numCasas;
    }

    public function set_vagasGaragem($vagasGaragem)
    {
        $this->vagasGaragem = $vagasGaragem;
    }
    public function get_vagasGaragem()
    {
        return $this->vagasGaragem;
    }

    public function set_quantidadeMoradores($quantidadeMoradores)
    {
        $this->quantidadeMoradores = $quantidadeMoradores;
    }
    public function get_quantidadeMoradores()
    {
        return $this->quantidadeMoradores;
    }
}
?>