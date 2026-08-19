<?php

function verificarMaioridade($idade){
    if($idade >=18){
        return "Maior idade";
    }else{
        return "Menor idade";
    }
}
$resultado = verificarMaioridade(15);
    echo "$resultado";
    echo "<br>";

$resultado = verificarMaioridade(27);
    echo "$resultado";
    echo "<br>";

$resultado = verificarMaioridade(40);
    echo "$resultado";
    echo "<br>";


?>