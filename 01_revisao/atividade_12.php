<?php
$idades = [15,16,27,35,23,21,18,32];
$soma = 0;
$maior = 0;

foreach ($idades as $idade ){
    $soma = $soma + $idade;

    if ($idade > 18){
        $maior = $maior + 1; // $maior += 1;
    }
}
$media = $soma/8;

echo "A média é =". $media;

echo "A maior idade é =". $maior;

?>