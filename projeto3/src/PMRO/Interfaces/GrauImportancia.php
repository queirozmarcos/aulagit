<?php
/*
Interface para Pessoa F�sica e Jur�dica - O grau de import�ncia varia de 1 a 5 para 1 menos importante e 5 muito importante

Por: Marcos Machado de Queiroz
*/

  namespace PMRO\Interfaces;

  interface GrauImportancia
  {
    public function getGrau();
    public function setGrau($grau);
  }
?>
