<?php
/*
7c. Criar aplicação que acesse através de variáveis de instância as classes Condomínio e Padaria, e que possa inserir valores aos atributos de ambas e mostrá-los no
navegador.
*/

//inserindo as classes
include_once 'Condominio.class.php';
include_once 'Padaria.class.php';

//criação do objeto

$Condominio = new Condominio("Jardim Acapulco", "Rua Treze, 21 - Acapulco", "R$ 6.500.000", 2, 4, 4);

$Padaria  = new Padaria("Nova Nacional", "Av.Thiago Ferreira, 399 - Vila Alice", "(13)3352-2179", "Pães Doces e Salgados, bolos, sanduíches,doces gelados e sorvetes", 12);

//manipulação do objeto
echo nl2br ("\nCONDOMÍNIO:\n");
echo nl2br ("Nome:"."\t".$Condominio->get_nomeCond()."\n");
echo nl2br ("Endereço:"."\t".$Condominio->get_enderecoCond()."\n");
echo nl2br ("Valor:"."\t".$Condominio->get_valorCondominio()."\n");
echo nl2br ("Número de casas:"."\t".$Condominio->get_numCasas()."\n");
echo nl2br ("Vagas na Garagem:"."\t".$Condominio->get_vagasGaragem()."\n");
echo nl2br ("Quantidade de Moradores:"."\t".$Condominio->get_quantidadeMoradores()."\n");

echo nl2br ("\nPADARIA:\n");
echo nl2br ("Nome:"."\t".$Padaria->get_nomePad()."\n");
echo nl2br ("Endereço:"."\t".$Padaria->get_enderecoPad()."\n");
echo nl2br ("Telefone:"."\t".$Padaria->get_telefonePad()."\n");
echo nl2br ("Produtos:"."\t".$Padaria->get_produtos()."\n");
echo nl2br ("Quantidade de funcionarios:"."\t".$Padaria->get_quantfuncionarios()."\n");

?>