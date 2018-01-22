<?php

require 'Lib/Carbon.php';
use Carbon\Carbon;
  class Cartao
  {
    public $numero;
    public $dataDeValidade;
  }

  class Conta
  {
    public $numero;
    public $saldo;
    public $limite;
  }


  class Agencia
  {
    public $numero;
  }

//Primeiro Cliente
  $cliente = new Cartao();
  $cliente->numero = 123456789;
  $cliente->dataDeValidade = Carbon::createFromDate(2022, 03, 7, "GMT");

  $C1Conta = new Conta();
  $C1Conta->numero = 54187952;
  $C1Conta->saldo = 1500;
  $C1Conta->limite = 3000;

  $clienteAg = new Agencia();
  $clienteAg->numero = 125;


//Segundo Cliente
  $cliente2Ag = new Agencia();
  $cliente2Ag->numero = 124;

  $cliente2 = new Cartao();
  $cliente2->numero = 987654321;
  $cliente2->dataDeValidade = Carbon::createFromDate(2026, 10, 01, "GMT");

  $C2Conta = new Conta();
  $C2Conta -> numero = 36987451;
  $C2Conta -> saldo = 70;
  $C2Conta -> limite = 7000;


  echo "O número de seu cartão é: $cliente->numero \n A validade é até: $cliente->dataDeValidade \nSua Agência é: $clienteAg->numero
  Os dados de sua conta \nNúmero: $C1Conta->numero \tSaldo: $C1Conta->saldo \tLimite: $C1Conta->limite  \n".PHP_EOL;


  echo "O Cliente 2 tem o cartão de número: $cliente2->numero \ne a validade é até: $cliente2->dataDeValidade \nSua Aguência é: $cliente2Ag->numero
  Os dados de sua conta \nNúmero: $C2Conta->numero \tSaldo: $C2Conta->saldo \tLimite: $C2Conta->limite  ".PHP_EOL;


 ?>
