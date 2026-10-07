<?php

class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
      $this->saldo = $this->saldo - $valor;
    }

    public function exibirSaldo(){
       echo "Titular: $this->titular Saldo: $this->saldo <br>";
    }
}

$conta1 = new ContaBancaria("Nicoli", 0);
$conta1->depositar(600);
$conta1->sacar(150);
$conta1->exibirSaldo();