<?php
  require_once("inclui_cli.php");

echo '
  <link rel="stylesheet" href="jquery-ui-1.11.3/jquery-ui.css">
<script src="jquery-ui-1.11.3/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.3/jquery-ui.js"></script>';

  if ($_REQUEST['passagem']=="descen.png")
  {
    $icone="ascend.png";
    krsort($clientes);
  }
  else
  {
    $icone="descen.png";
//  ksort($clientes);
  }

//  $icone="ascend.png";
//  $icone="descen.png";

  echo '<div class="table-responsive">';
  echo '<table class="table table-striped" id="lista">';
  echo '<thead><tr>';
  echo '<th><a href="'.$_SERVER[PHP_SELF].'?passagem='.$icone.'" id="imagem"><img src="'.$icone.'" />Código</a></th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>e-Mail</th>';
  echo '</tr></thead>';
  echo '<tbody>';

  //<a href="#" ><img src="imagem1.jpg" alt="Imagem1" id="imagem1" onclick="mudaImagem(1)"  /></a>

  foreach ($clientes as $i=>$cli)
  {
    echo '<tr>';
    echo '<td>';
    echo $i;
    echo '</td>';
    echo '<td>';
    echo '<a href="#" data="'.$i.'" id="dialog-link">'.$cli->nome.'</a>';
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
  
//  print "<pre>";
//  print_r($clientes);
//  print "</pre>";

?>
<div id="dialog" title="Cliente"></div>

<script>
    $("#zzzz_dialog-link").click(function()
    {
        $( "#dialog" ).dialog( "open" );
        var cod = $( this ).attr("data");
        $( "#dialog" ).load("mostra_cli.php?cod="+cod);
    });

    $("tbody a").click(function()
    {
        $( "#dialog" ).dialog( "open" );
        var cod = $( this ).attr("data");
        $( "#dialog" ).load("mostra_cli.php?cod="+cod);
    });


$( "#dialog" ).dialog(
{
	autoOpen: false,
	width: 400,
	buttons: [
	{
			text: "Ok",
			click: function()
            {
				$( this ).dialog( "close" );
			}
	},
		{
			text: "Cancel",
			click: function()
            {
				$( this ).dialog( "close" );
			}
		}
	]
});

$( "#xdialog-link" ).click(function( event )
{
   $( "#dialog" ).dialog( "open" );
	event.preventDefault();
});

</script>
