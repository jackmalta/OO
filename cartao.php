<?php
  class Cartao
  {
    public $numero;
    public $dataDeValidade;
  }

  $cliente = new Cartao();
  $cliente -> numero = "123456789";
  $cliente -> dataDeValidade = "12/26";

  echo "O número de seu cartão é: $cliente->numero \n A validade é até: $cliente->dataDeValidade";

 ?>
