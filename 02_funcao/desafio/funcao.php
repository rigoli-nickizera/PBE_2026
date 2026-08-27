<?php

function calcularPedido($nomeProduto, $pUnitario, $qntd, $desconto = 0, $imposto = 0) {
 
    $subtotal = $pUnitario * $qntd;
    

    $valorDesconto = $subtotal * ($desconto / 100);
    $valorDesconto = $subtotal - $valorDesconto;
    $valorImposto = $valorDesconto * ($imposto / 100);
    
   
    $totalFinal = $valorDesconto + $valorImposto;

    return [
        "produto" => $nomeProduto,
        "subtotal" => $subtotal,
        "desconto" => $valorDesconto,
        "imposto" => $valorImposto,
        "total" => $totalFinal
    ];
}