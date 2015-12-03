<?php
/*
Sub-classe de Cliente para clientes Pessoa Física

Por: Marcos Machado de Queiroz
*/

  require_once("cliente.php");
  require_once("grau_importancia.php");
  require_once("endereco_cobranca.php");

  class Cli_p_f extends Cliente implements GrauImportancia, EnderecoCobranca
  {
    private $cpf;  // Variável para CPF
    private $grau; // Variável para Grau de Importância
    private $ende; // Variável para Endereço de Cobrança

    public function __construct()
    {
      //Construtor;
    }
    
    public function getCpf()
    {
      return $this->cpf;
    }
    public function setCpf($cpf)
    {
      $this->cpf = $cpf;
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
