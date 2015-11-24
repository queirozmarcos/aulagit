<?php
  require_once("inclui_cli.php");

echo '
  <link rel="stylesheet" href="jquery-ui-1.11.3/jquery-ui.css">
<script src="jquery-ui-1.11.3/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.3/jquery-ui.js"></script>';

  if ($caminho)
    if ($caminho=="descen.png")
        $caminho = "ascend.png";
      else
        $caminho = "descen.png";
  else
    $caminho="descen.png";

  echo '<div class="table-responsive">';
  echo '<table class="table table-striped" id="lista>';
  echo '<thead><tr>';
  echo '<th><a href="'.$_SERVER[PHP_SELF].'"><img src="'.$caminho.'" />Código</a></th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>e-Mail</th>';
  echo '</tr></thead>';
  echo '<tbody>';

  for ($i=0; $i <= 9; $i++)
  {
    echo '<tr>';
    echo '<td>';
    echo $i+1;
    echo '</td>';
    echo '<td>';
    echo '<a href="#" data="'.$i.'" id="dialog-link">'.$clientes[$i]->GetNome().'</a>';
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->GetCpf();
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->GetEndereco();
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->GetTelefone();
    echo '</td>';
    echo '<td>';
    echo $clientes[$i]->GetEmail();
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
