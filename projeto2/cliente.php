<?php
/*
Classe Cliente

Por: Marcos Machado de Queiroz
*/

  class Cliente
  {
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $email;
    
    public function __construct()
    {
      //Construtor;
    }
    
    public function getNome()
    {
      return $this->nome;
    }
    public function setNome($nome)
    {
      $this->nome = $nome;
    }
    public function getEndereco()
    {
      return $this->endereco;
    }
    public function setEndereco($endereco)
    {
      $this->endereco = $endereco;
    }
    public function getTelefone()
    {
      return $this->telefone;
    }
    public function setTelefone($telefone)
    {
      $this->telefone = $telefone;
    }
    public function getEmail()
    {
      return $this->email;
    }
    public function setEmail($email)
    {
      $this->email = $email;
    }
  }
?>
