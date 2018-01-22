<?php

class Conta {
  public $numero;
  public $saldo;
}

$x = new Conta;
$x -> numero = "123";
$x -> saldo = "1000";

echo " Número da conta X: $x->numero \t Saldo: $x->saldo \n";
 ?>
