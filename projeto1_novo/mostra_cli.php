<?php
  require_once("inclui_cli.php");

  $i = filter_input(INPUT_GET, 'id');
  
  echo "C�digo = $i <br />";
  echo "Nome = ".$clientes[$i]->getNome()."<br />";
  echo "CPF =  ".$clientes[$i]->getCpf()."<br />";
  echo "Endere�o = ".$clientes[$i]->getEndereco()."<br />";
  echo "Telefone = ".$clientes[$i]->getTelefone()."<br />";
  echo "e-Mail =   ".$clientes[$i]->getEmail()."<br />";
  echo '<button class="btn btn-primary" onclick="history.back()">Voltar</button>';
?>
