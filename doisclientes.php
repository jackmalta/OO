<?php
  class cliente
  {
    public $nome;
    public $codigo;
  }

  $clienteA = new Cliente();
  $clienteA -> nome = "João Antonio";
  $clienteA -> codigo = "159753";

  $clienteB = new Cliente();
  $clienteB -> nome = "Ana Maria";
  $clienteB -> codigo = "9578413";

  echo "Dados do Cliente-A \n Nome: $clienteA->nome Código: $clienteA->codigo".PHP_EOL;
  echo "Dados do Cliente-B \n Nome: $clienteB->nome Código: $clienteB->codigo".PHP_EOL;


?>
