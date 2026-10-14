<?php
class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0) {
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Total dos itens: R$ " . $this->valorItens . "<br>";
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);

        echo "Subtotal: R$ " . $this->totalPedido . "<br>";
        echo "Imposto: R$ " . $valorImposto . "<br>";
        echo "Total a pagar: R$ " . $this->totalPagar . "<br>" ;
    }
}

$pedido = new Pedido("Nickzera");

$pedido->adicionarItem(150);
$pedido->adicionarItem(70);
$pedido->adicionarItem(10);

$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 12);

$nota->calcularTotal();
$nota->exibirNota();

?>