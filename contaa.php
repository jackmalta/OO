<?php
  class Conta
  {
    public $numero;
    public $saldo = 100;
  }

    function deposita($valor)
    {
      $this->saldo += $valor;
    }

    /*
    function deposita($valor)
    {
      $this->saldo += $valor;
    }
    */

?>
