<?php
  require_once("inclui_cli.php");
  $i = $_REQUEST[cod];
  echo "Código = $i <br />";
  echo "Nome = ".$clientes[$i]->getNome()."<br />";
  echo "CPF =  ".$clientes[$i]->getCpf()."<br />";
  echo "Endereço = ".$clientes[$i]->getEndereco()."<br />";
  echo "Telefone = ".$clientes[$i]->getTelefone()."<br />";
  echo "e-Mail =   ".$clientes[$i]->getEmail();
//  print_r($clientes[$_REQUEST[cod]]);
?>
