<?php
/*
Programa para exibir o grau de importância do(s) cliente(s) na consulta e dentro da janela modal

Por: Marcos Machado de Queiroz
*/

function MostraGrau($star)
{
  for ($k=1; $k <= $star; $k++)
  {
//  echo '<i class="fa fa-star"></i>';
    echo '<img src="./img/estrela.png" />';
  }
}
?>
