<?php
/*
Interface para Pessoa Física e Jurídica - Endereço de Cobrança (Obs.: o cliente pode cadastrar um endereço de cobrança diferente ou não.

Por: Marcos Machado de Queiroz
*/

  interface EnderecoCobranca
  {
    public function getEnderecoCobranca();
    public function setEnderecoCobranca($ende);
    public function existeEnderecoCobranca();
  }
?>
