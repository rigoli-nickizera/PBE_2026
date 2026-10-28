<?php

$nome = $_POST['nome'] ;
$email = $_POST['email'] ;
$data_retirada = $_POST['data_retirada'] ;
$dia = $_POST['dia'];
$categoria = $_POST['categoria'] ;
$seguro = $_POST['seguro'];
$gps = $_POST['gps'] ;
$cadeira = $_POST['cadeira'];

function calcularSubtotal($categoria, $dias)
{
    if ($categoria == "Econômico") {
        $precoDia = 100;
    } elseif ($categoria == "Intermediário") {
        $precoDia = 150;
    } else {
        $precoDia = 250;
    }

    return $precoDia * $dias;
}

function calcularPorcentualDesconto($dias)
{
    if ($dias < 7) {
        return 0;
    } elseif ($dias < 14) {
        return 10;
    } else {
        return 20;
    }
}

function calcularAdicionais($seguro, $gps, $cadeira)
{
    $precos = [
        "seguro" => 40,
        "gps" => 15,
        "cadeira" => 20
    ];

    $adicionais = 0;
    if ($seguro) {
        $adicionais += $precos["seguro"];
    }

    if ($gps){
        $adicionais += $precos["gps"];
    }

    if ($cadeira) {
        $adicionais += $precos["cadeira"];
    }

    return $adicionais;
}

$subtotal = calcularSubtotal($categoria, $dia);

$percentualDesconto = calcularPorcentualDesconto($dia);

$desconto = $subtotal * $percentualDesconto;

$valorAdicionais = calcularAdicionais(
    $seguro,
    $gps,
    $cadeira
);


$total = $subtotal - $desconto + $valorAdicionais;


include "view_relatorio.php";

?>
