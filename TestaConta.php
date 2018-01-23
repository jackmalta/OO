<?php
  require 'contaa.php';

  $conta = new Conta();
  echo "Saldo Inicial: $conta->saldo".PHP_EOL;
  $conta->deposita(200);
  echo "Saldo Atual: $conta->saldo".PHP_EOL;
 ?>
