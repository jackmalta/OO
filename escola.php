<?php
  class Aluno
  {
    public $nome;
    public $rg;
    public $dataNascimento;
  }
  class Funcionarios
  {
    public $nome;
    public $salario;
  }

  class Turma
  {
    public $serie;
    public $sigla;
    public $tipoDeEnsino;
    public $periodo;
  }

//Primeiro Aluno
  $Aluno1 = new Aluno();
  $Aluno1 -> nome = "Andy Bernard";
  $Aluno1 -> rg = "428798541";
  $Aluno1 -> dataNascimento = "18/8/1978";

//Segundo Aluno
  $Aluno2 = new Aluno();
  $Aluno2 -> nome = "Michael Scott";
  $Aluno2 -> rg = "258795413";
  $Aluno2 -> dataNascimento = "13/06/1969";

//Primeiro Funcionário
  $Funcionario1 = new Funcionarios();
  $Funcionario1 -> nome = "Pam Beemsley";
  $Funcionario1 -> salario = "1900";

//Segundo Funcionário
  $Funcionario2 = new Funcionarios();
  $Funcionario2 -> nome = "Stanley Brown";
  $Funcionario2 -> salario = "1600";


  echo "Os dados do Primeiro aluno são: \n
    Nome: $Aluno1->nome \tRG: $Aluno1->rg \tData de Nascimento: $Aluno1->dataNascimento \n".PHP_EOL;
  echo "Os dados do Segundo aluno são: \n
    Nome: $Aluno2->nome \tRG: $Aluno2->rg \tData de Nascimento: $Aluno2->dataNascimento \n".PHP_EOL;

    echo "Os dados de nosso primeiro funcionário são: \n
    Nome: $Funcionario1->nome \tSalário: $Funcionario1->salario \n".PHP_EOL;
    echo "Os dados de nosso Segundo funcionário são: \n
    Nome: $Funcionario2->nome \tSalário: $Funcionario2->salario \n".PHP_EOL;
 ?>
