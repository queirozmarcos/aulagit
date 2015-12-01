<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
  <body>
    <div class="container"> <!--conteudo da principal-->
    <?php
      require_once("inclui_cli.php");

      if ($_REQUEST['passagem']=="descen.png")
      {
        $icone="ascend.png";
        krsort($clientes);
      }
      else
      {
        $icone="descen.png";
//      ksort($clientes);
      }

      echo '<div class="table-responsive">';
      echo '<table class="table table-striped" id="lista">';
      echo '<thead><tr>';
      echo '<th><a href="'.$_SERVER[PHP_SELF].'?passagem='.$icone.'" id="imagem"><img src="'.$icone.'" />Código</a></th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>e-Mail</th>';
      echo '</tr></thead>';
      echo '<tbody>';

      foreach ($clientes as $i=>$cli)
      {
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
        echo '<td>';
        echo '<a href="mostra_cli.php?id='.$i.'">'.$cli->nome.'</a>';
        echo '</td>';
        echo '<td>';
        echo $cli->cpf;
        echo '</td>';
        echo '<td>';
        echo $cli->endereco;
        echo '</td>';
        echo '<td>';
        echo $cli->telefone;
        echo '</td>';
        echo '<td>';
        echo $cli->email;
        echo '</td>';
        echo '</tr>';
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
