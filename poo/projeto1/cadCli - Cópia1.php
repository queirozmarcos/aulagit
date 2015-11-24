<?php
  require_once("inclui_cli.php");

echo '
  <link rel="stylesheet" href="jquery-ui-1.11.3/jquery-ui.css">
<script src="jquery-ui-1.11.3/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.3/jquery-ui.js"></script>';

  $icone="ascend.png";
  $icone="descen.png";

  echo '<div class="table-responsive">';
  echo '<table class="table table-striped" id="lista">';
  echo '<thead><tr>';
  echo '<th><a href="'.$_SERVER[PHP_SELF].'"><img src="'.$icone.'" />Código</a></th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>e-Mail</th>';
  echo '</tr></thead>';
  echo '<tbody>';

  for ($i=0; $i <= 9; $i++)
  {
    echo '<tr>';
    echo '<td>';
    echo $i+1;
    echo '</td>';
    echo '<td>';
    echo '<a href="#" data="'.$i.'" id="dialog-link">'.$clientes[$i]->nome.'</a>';
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->cpf;
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->endereco;
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->telefone;
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->email;
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
    $("#dialog-link").click(function()
    {
        $( "#dialog" ).dialog( "open" );
        var cod = $( this ).attr("data");
        $( "#dialog" ).load("mostra_cli.php?cod="+cod);
    });

    $("#lista a").click(function()
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
