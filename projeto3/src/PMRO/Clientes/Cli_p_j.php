<?php
/*
Sub-classe de Cliente para clientes Pessoa Jurídica

Por: Marcos Machado de Queiroz
*/

  namespace PMRO\Clientes;

  use PMRO\Interfaces\EnderecoCobranca;
  use PMRO\Interfaces\GrauImportancia;
  use PMRO\Clientes\Cliente;

  class Cli_p_j extends Cliente implements GrauImportancia, EnderecoCobranca
  {
    private $cnpj; // Variável para CNPJ
    private $grau; // Variável para Grau de Importância
    private $ende; // Variável para Endereço de Cobrança

    public function __construct()
    {
      //Construtor;
    }
    
    public function getCnpj()
    {
      return $this->cnpj;
    }
    public function setCnpj($cnpj)
    {
      $this->cnpj = $cnpj;
    }

    public function getGrau()
    {
      return $this->grau;
    }
    public function setGrau($grau)
    {
      $this->grau = $grau;
    }

    public function getEnderecoCobranca()
    {
      return $this->ende;
    }
    public function setEnderecoCobranca($ende)
    {
      $this->ende = $ende;
    }
    public function existeEnderecoCobranca()
    {
       if ($this->ende)
         return true;
       else
         return false;
    }

  }
?>
