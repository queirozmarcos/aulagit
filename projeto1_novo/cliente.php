<?php
  class Cliente
  {
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $email;
    
    public function __construct($nome,$cpf,$endereco,$telefone,$email)
    {
      $this->nome = $nome;
      $this->cpf  = $cpf;
      $this->endereco = $endereco;
      $this->telefone = $telefone;
      $this->email    = $email;
    }
    
    public function getNome()
    {
      return $this->nome;
    }
    public function getCpf()
    {
      return $this->cpf;
    }
    public function getEndereco()
    {
      return $this->endereco;
    }
    public function getTelefone()
    {
      return $this->telefone;
    }
    public function getEmail()
    {
      return $this->email;
    }
  }
?>
