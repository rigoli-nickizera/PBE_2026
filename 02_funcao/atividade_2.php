<?php

function calcularPrecoFinal($preco, $qntd, $desconto){
    $total= $preco * $qntd;
    return $total - ($total*($desconto/100));
}
$preco = 7;
$qntd = 3;
$desconto = 10; 

$resultado = calcularPrecoFinal ($preco, $qntd, $desconto);
echo "Preço : $preco";
echo "<br>";
echo "Quantidade : $qntd";
echo "<br>";
echo "Desconto : $desconto";
echo "<br>";
echo "Preço Final = $resultado";

?>