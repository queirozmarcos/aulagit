<?php
/*
Interface para Pessoa F�sica e Jur�dica - Endere�o de Cobran�a (Obs.: o cliente pode cadastrar um endere�o de cobran�a diferente ou n�o.

Por: Marcos Machado de Queiroz
*/

  interface EnderecoCobranca
  {
    public function getEnderecoCobranca();
    public function setEnderecoCobranca($ende);
    public function existeEnderecoCobranca();
  }
?>
