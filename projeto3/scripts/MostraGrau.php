<?php
/*
Programa para exibir o grau de importância do(s) cliente(s) na consulta e dentro da janela modal

Por: Marcos Machado de Queiroz
*/

function MostraGrau($star, $path)
{
  for ($k=1; $k <= $star; $k++)
  {
    echo '<img src="'.$path.'estrela.png" />';
  }
}
?>
