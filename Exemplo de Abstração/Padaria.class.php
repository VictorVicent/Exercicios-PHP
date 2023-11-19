<?php
/*
7b. Implementar a abstração de uma padaria, também com atributos pertinentes e 
os métodos de manipulação dos atributos.
*/

class Padaria
{
    //Atributos
    private $nomePad;
    private $enderecoPad;
    private $telefonePad;
    private $produtos;
    private $quantfuncionarios;

    public function __construct($nomePad, $enderecoPad, $telefonePad, $produtos, $quantfuncionarios) {
        $this->nomePad = $nomePad;
        $this->enderecoPad = $enderecoPad;
        $this->telefonePad = $telefonePad;
        $this->produtos = $produtos;
        $this->quantfuncionarios = $quantfuncionarios;
    }

    /* métodos inserir e retornar valores dos atributos: set() e get().*/
    public function set_nomePad($nomePad)
    {
        $this->nomePad= $nomePad;
    }
    public function get_nomePad()
    {
        return $this->nomePad;
    }
    
    public function set_enderecoPad($enderecoPad)
    {
        $this->enderecoPad = $enderecoPad;
    }
    public function get_enderecoPad()
    {
        return $this->enderecoPad;
    }
    
    public function set_telefonePad($telefonePad)
    {
        $this->telefonePad = $telefonePad;
    }
    public function get_telefonePad()
    {
        return $this->telefonePad;
    }
    
    public function set_produtos($produtos)
    {
        $this->produtos = $produtos;
    }
    public function get_produtos()
    {
        return $this->produtos;
    }
    
    public function set_quantfuncionarios($quantfuncionarios)
    {
        $this->quantfuncionarios = $quantfuncionarios;
    }
    public function get_quantfuncionarios()
    {
        return $this->quantfuncionarios;
    }
}
?>