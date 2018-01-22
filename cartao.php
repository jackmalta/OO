<?php
  class Cartao
  {
    public $numero;
    public $dataDeValidade;
  }

  class Agencia
  {
    public $numero;
  }

  $cliente = new Cartao();
  $cliente -> numero = "123456789";
  $cliente -> dataDeValidade = "12/26";

  $clienteAg = new Agencia();
  $clienteAg -> numero = "125";

  $cliente2Ag = new Agencia();
  $cliente2Ag -> numero = "124";

  $cliente2 = new Cartao();
  $cliente2 -> numero = "987654321";
  $cliente2 -> dataDeValidade = "10/22";


  echo "O número de seu cartão é: $cliente->numero \n A validade é até: $cliente->dataDeValidade \nSua Agência é: $clienteAg->numero".PHP_EOL;
  echo "O Cliente 2 tem o cartão de número: $cliente2->numero \ne a validade é até: $cliente2->dataDeValidade \nSua Aguência é: $cliente2Ag->numero".PHP_EOL;


 ?>
