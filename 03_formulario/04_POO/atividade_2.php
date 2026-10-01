<?php

class Conta {
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;


function depositar($valor){
    $this->saldo = $this->saldo + $valor;
    echo "O salto amentou para $this->saldo <br>";
}


function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo";
    }

function consultarSaldo(){
    echo "O valor do saldo é de $this->saldo";
}
}

//objeto(criando conta1)
$conta1 = new Conta();

    $conta1->titular = "Nicoli";
    $conta1->numero = "123";
    $conta1->saldo = "50.000";
    $conta1->tipo = "Conta Corrente";


    echo "Titular:" . $conta1->titular . "<br>";
    echo "Numero:" . $conta1->numero . "<br>";
    echo "Saldo:" . $conta1->saldo . "<br>";
    echo "Tipo:" . $conta1->tipo . "<br>";

    $conta1->depositar(100);
    $conta1->sacar(50);
    $conta1->consultarSaldo();

//objeto(criando conta2)
$conta2 = new Conta();

    $conta2->titular = "Helena";
    $conta2->numero = "765";
    $conta2->saldo = "5.000";
    $conta2->tipo = "Conta Universitária";


    echo "Titular:" . $conta2->titular . "<br>";
    echo "Numero:" . $conta2->numero . "<br>";
    echo "Saldo:" . $conta2->saldo . "<br>";
    echo "Tipo:" . $conta2->tipo . "<br>";

    $conta2->depositar(1.000);
    $conta2->sacar(100);
    $conta2->consultarSaldo();

  