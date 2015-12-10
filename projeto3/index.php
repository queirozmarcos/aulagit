<?php
define("CLASS_DIR","src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function ($class) { require_once(str_replace('\\', '/', $class . '.php')); });
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="short cut icon" href="./img/livro.gif">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
  <body>
    <div class="container-fluid"> <!--conteudo da principal-->
    <?php
      use PMRO\Clientes\Cli_p_f;
      use PMRO\Clientes\Cli_p_j;

      require_once("./scripts/IncluiCli.php");
      require_once("./scripts/MostraGrau.php");

      if ($_REQUEST['passagem']=="./img/descen.png")
      {
        $icone="./img/ascend.png";
        krsort($cli_p_j);
        krsort($cli_p_f);
      }
      else
      {
        $icone="./img/descen.png";
      }

      echo '<div class="table-responsive">';
      echo '<table class="table table-striped" id="lista">';
      echo '<thead><tr>';
      echo '<th><a href="'.$_SERVER[PHP_SELF].'?passagem='.$icone.'" id="imagem"><img src="'.$icone.'" />Código</a></th><th>Nome</th><th>CPF/CNPJ</th><th>Endereço</th><th>Telefone</th><th>e-Mail</th><th>Tipo Cliente</th><th>Importância</th>';
      echo '</tr></thead>';
      echo '<tbody>';

  if ($_REQUEST['passagem']=="./img/descen.png")
  {
    foreach ($cli_p_j as $i=>$cli_j)
    {
      $cod = $i."/J";
      echo '<tr>';
      echo '<td>';
      echo $i;
      echo '</td>';
      echo '<td>';
      echo '<a href="./scripts/MostraCli.php?id='.$cod.'">'.$cli_j->getNome().'</a>';
      echo '</td>';
      if ($cli_j instanceof Cli_p_j)
      {
        echo '<td>';
        echo $cli_j->getCnpj();
        echo '</td>';
        echo '<td>';
      }
      echo $cli_j->getEndereco();
      echo '</td>';
      echo '<td>';
      echo $cli_j->getTelefone();
      echo '</td>';
      echo '<td>';
      echo $cli_j->getEmail();
      echo '</td>';
      echo '<td>';
      echo "Pessoa Jurídica";
      echo '</td>';
      echo '<td>';
      MostraGrau($cli_j->getGrau(),"./img/");
      echo '</td>';
      echo '</tr>';
    }
    foreach ($cli_p_f as $i=>$cli_f)
    {
      $cod = $i."/F";
      echo '<tr>';
      echo '<td>';
      echo $i;
      echo '</td>';
      echo '<td>';
      echo '<a href="./scripts/MostraCli.php?id='.$cod.'">'.$cli_f->getNome().'</a>';
      echo '</td>';
      if ($cli_f instanceof Cli_p_f)
      {
        echo '<td>';
        echo $cli_f->getCpf();
        echo '</td>';
        echo '<td>';
      }
      echo $cli_f->getEndereco();
      echo '</td>';
      echo '<td>';
      echo $cli_f->getTelefone();
      echo '</td>';
      echo '<td>';
      echo $cli_f->getEmail();
      echo '</td>';
      echo '<td>';
      echo "Pessoa Física";
      echo '</td>';
      echo '<td>';
      MostraGrau($cli_f->getGrau(),"./img/");
      echo '</td>';
      echo '</tr>';
    }
  }
  else
  {
    foreach ($cli_p_f as $i=>$cli_f)
    {
      $cod = $i."/F";
      echo '<tr>';
      echo '<td>';
      echo $i;
      echo '</td>';
      echo '<td>';
      echo '<a href="./scripts/MostraCli.php?id='.$cod.'">'.$cli_f->getNome().'</a>';
      echo '</td>';
      if ($cli_f instanceof Cli_p_f)
      {
        echo '<td>';
        echo $cli_f->getCpf();
        echo '</td>';
        echo '<td>';
      }
      echo $cli_f->getEndereco();
      echo '</td>';
      echo '<td>';
      echo $cli_f->getTelefone();
      echo '</td>';
      echo '<td>';
      echo $cli_f->getEmail();
      echo '</td>';
      echo '<td>';
      echo "Pessoa Física";
      echo '</td>';
      echo '<td>';
      MostraGrau($cli_f->getGrau(),"./img/");
      echo '</td>';
      echo '</tr>';
    }
    foreach ($cli_p_j as $i=>$cli_j)
    {
      $cod = $i."/J";
      echo '<tr>';
      echo '<td>';
      echo $i;
      echo '</td>';
      echo '<td>';
      echo '<a href="./scripts/MostraCli.php?id='.$cod.'">'.$cli_j->getNome().'</a>';
      echo '</td>';
      if ($cli_j instanceof Cli_p_j)
      {
        echo '<td>';
        echo $cli_j->getCnpj();
        echo '</td>';
        echo '<td>';
      }
      echo $cli_j->getEndereco();
      echo '</td>';
      echo '<td>';
      echo $cli_j->getTelefone();
      echo '</td>';
      echo '<td>';
      echo $cli_j->getEmail();
      echo '</td>';
      echo '<td>';
      echo "Pessoa Jurídica";
      echo '</td>';
      echo '<td>';
      MostraGrau($cli_j->getGrau(),"./img/");
      echo '</td>';
      echo '</tr>';
    }
  }

      echo '<tbody></table></div>';

    ?>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </body>
</html>
