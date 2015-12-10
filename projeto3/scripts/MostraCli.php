<?php
/*
Programa para exibir os dados do cliente selecionado dentro da janela modal

Por: Marcos Machado de Queiroz
*/

  require_once("IncluiCli.php");
  require_once("MostraGrau.php");

  $a = filter_input(INPUT_GET, 'id');
  $b = explode("/", $a);
  $i = $b[0];
  $t = $b[1];

  echo "Código = $i <br />";

  if ($t == "F")
  {
    echo "Nome = ".$cli_p_f[$i]->getNome()."<br />";
    echo "CPF =  ".$cli_p_f[$i]->getCpf()."<br />";
    echo "Endereço = ".$cli_p_f[$i]->getEndereco()."<br />";
    echo "Telefone = ".$cli_p_f[$i]->getTelefone()."<br />";
    echo "e-Mail =   ".$cli_p_f[$i]->getEmail()."<br />";
    echo "Tipo Cliente = Pessoa Física<br />";
    echo "Importância = ";
    MostraGrau($cli_p_f[$i]->getGrau(),"../img/");
    if ($cli_p_f[$i]->existeEnderecoCobranca())
       echo "<br /><br />Endereço para Cobrança = ".$cli_p_f[$i]->getEnderecoCobranca();
    else
       echo "<br /><br />Endereço para Cobrança = o mesmo";
  }
  else
  {
    echo "Nome = ".$cli_p_j[$i]->getNome()."<br />";
    echo "CNPJ = ".$cli_p_j[$i]->getCnpj()."<br />";
    echo "Endereço = ".$cli_p_j[$i]->getEndereco()."<br />";
    echo "Telefone = ".$cli_p_j[$i]->getTelefone()."<br />";
    echo "e-Mail =   ".$cli_p_j[$i]->getEmail()."<br />";
    echo "Tipo Cliente = Pessoa Jurídica<br />";
    echo "Importância = ";
    MostraGrau($cli_p_j[$i]->getGrau(),"../img/");
    if ($cli_p_j[$i]->existeEnderecoCobranca())
       echo "<br /><br />Endereço para Cobrança = ".$cli_p_j[$i]->getEnderecoCobranca();
    else
       echo "<br /><br />Endereço para Cobrança = o mesmo";
  }

  echo '<br /><br /><button class="btn btn-primary" onclick="history.back()">Voltar</button>';
?>
