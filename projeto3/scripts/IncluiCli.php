<?php
/*
Programa que instancia Cliente pessoa física e jurídica e alimenta os array's de objetos

Por: Marcos Machado de Queiroz
*/

define("CLASS_DIR","../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function ($class) { require_once(str_replace('\\', '/', $class . '.php')); });

  use PMRO\Clientes\Cli_p_f;
  use PMRO\Clientes\Cli_p_j;

  for ($i = 1; $i<=10; $i++)
  {
    $cli_p_f[$i] = new Cli_p_f();
  }

  for ($j = 11; $j<=12; $j++)
  {
    $cli_p_j[$j] = new Cli_p_j();
  }

  $cli_p_f[1]->setNome("João da Silva");
  $cli_p_f[1]->setEndereco("Av. Brasil, 500");
  $cli_p_f[1]->setTelefone("55(21)2221-3019");
  $cli_p_f[1]->setEmail("joaodasilva98@gmail.com");
  $cli_p_f[1]->setCpf("785.164.721-59");
  $cli_p_f[1]->setGrau(1);
  $cli_p_f[1]->setEnderecoCobranca("Av. Brasil, 19.000 - 3º andar");

  $cli_p_f[2]->setNome("José de Anchieta");
  $cli_p_f[2]->setEndereco("Rua Uruguai, 123");
  $cli_p_f[2]->setTelefone("55(11)99777-2020");
  $cli_p_f[2]->setEmail("janchieta@bol.com.br");
  $cli_p_f[2]->setCpf("535.610.757-97");
  $cli_p_f[2]->setGrau(2);
  $cli_p_f[2]->setEnderecoCobranca("Av. Pres. Juscelino, 1200");

  $cli_p_f[3]->setNome("Joaquim Nabuco");
  $cli_p_f[3]->setEndereco("Av. Nova Iorque, 27 - apt.203");
  $cli_p_f[3]->setTelefone("55(19)99977-0202");
  $cli_p_f[3]->setEmail("nabucojoaquim@globo.com");
  $cli_p_f[3]->setCpf("577.319.146-66");
  $cli_p_f[3]->setGrau(3);

  $cli_p_f[4]->setNome("Manuel Borba");
  $cli_p_f[4]->setEndereco("Rua 15 de Novembro, 17");
  $cli_p_f[4]->setTelefone("55(31)3939-3030");
  $cli_p_f[4]->setEmail("manuelborba@hotmail.com");
  $cli_p_f[4]->setCpf("051.549.831-90");
  $cli_p_f[4]->setGrau(4);
  $cli_p_f[4]->setEnderecoCobranca("Rua da Anunciação, 18 - Sala 11");

  $cli_p_f[5]->setNome("Maria Caetana");
  $cli_p_f[5]->setEndereco("Rua Gonçalves Dias, 203");
  $cli_p_f[5]->setTelefone("55(27)99797-9977");
  $cli_p_f[5]->setEmail("mariamariacaetana@ig.com.br");
  $cli_p_f[5]->setCpf("675.418.129-00");
  $cli_p_f[5]->setGrau(5);

  $cli_p_f[6]->setNome("Marta de Deus");
  $cli_p_f[6]->setEndereco("Rua Natividade, 37 - casa 1");
  $cli_p_f[6]->setTelefone("55(11)98988-8811");
  $cli_p_f[6]->setEmail("martadedeus2015@gmail.com");
  $cli_p_f[6]->setCpf("515.078.650-07");
  $cli_p_f[6]->setGrau(5);

  $cli_p_f[7]->setNome("Joaquina Casé");
  $cli_p_f[7]->setEndereco("Av. Martins Pena, 147");
  $cli_p_f[7]->setTelefone("55(21)99799-1321");
  $cli_p_f[7]->setEmail("joaquinamariacaze@gmail.com");
  $cli_p_f[7]->setCpf("421.383.688-66");
  $cli_p_f[7]->setGrau(1);

  $cli_p_f[8]->setNome("Joana Prado");
  $cli_p_f[8]->setEndereco("Rua da Glória, 4 - apt.101");
  $cli_p_f[8]->setTelefone("55(11)6342-1919");
  $cli_p_f[8]->setEmail("joanaprado@joanaprado.com");
  $cli_p_f[8]->setCpf("294.122.755-52");
  $cli_p_f[8]->setGrau(4);

  $cli_p_f[9]->setNome("Marisa Monte");
  $cli_p_f[9]->setEndereco("Av. da Praia, 214 - Cobertura 1");
  $cli_p_f[9]->setTelefone("55(21)2211-2121");
  $cli_p_f[9]->setEmail("marisamonte@farol.com.br");
  $cli_p_f[9]->setCpf("656.989.835-34");
  $cli_p_f[9]->setGrau(5);
  $cli_p_f[9]->setEnderecoCobranca("Rua da Anunciação, 18 - Sala 11");

  $cli_p_f[10]->setNome("Mário Quintana");
  $cli_p_f[10]->setEndereco("Av. Brasil, 412");
  $cli_p_f[10]->setTelefone("55(11)99778-9797");
  $cli_p_f[10]->setEmail("quintanamario@hotmail.com");
  $cli_p_f[10]->setCpf("997.438.318-86");
  $cli_p_f[10]->setGrau(5);

  $cli_p_j[11]->setNome("Agrolar S/A");
  $cli_p_j[11]->setEndereco("Rod. Pres. Dutra km 21");
  $cli_p_j[11]->setTelefone("55(21)2222-9799");
  $cli_p_j[11]->setEmail("agrolarsa@hotmail.com");
  $cli_p_j[11]->setCnpj("22.742.157/0001-25");
  $cli_p_j[11]->setGrau(5);
  $cli_p_j[11]->setEnderecoCobranca("Rua Aymorés, 123 - Galpão");

  $cli_p_j[12]->setNome("Mercado Agora Ltda.");
  $cli_p_j[12]->setEndereco("Rua Novidades, 100");
  $cli_p_j[12]->setTelefone("55(11)3132-9997");
  $cli_p_j[12]->setEmail("agoramercadosp@gmail.com");
  $cli_p_j[12]->setCnpj("56.257.301/0001-50");
  $cli_p_j[12]->setGrau(3);

?>
