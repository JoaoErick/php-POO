<?php

class ContaBancaria {
    public $banco;
    public $nomeTitular = 'João Erick Barbosa';
    public $numeroAgencia = '3467';
    public $numeroConta;
    public $saldo = 1000.00;
}

$conta = new ContaBancaria();

var_dump($conta);
var_dump($conta->nomeTitular);
