<?php

require_once "funcao.php";

$resultado = calcularPedido ("Teclado", 100,10,5,7);

echo "nome:". $resultado ["produto"] . "<br>";


echo "subtotal:". $resultado ["subtotal"] . "<br>";
echo "desconto:". $resultado ["desconto"] . "<br>";
echo "imposto:". $resultado ["imposto"] . "<br>";
echo "total:". $resultado ["total"] . "<br>";

$TotalcomFrete = calculoFrete ($resultado['total']);
echo "Total com frete" . $TotalcomFrete;

?>