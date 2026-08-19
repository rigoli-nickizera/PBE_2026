<?php
    function analisarNumero ($numero){
    $dobro= $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero * $numero;
    $situacao = "";

    if ( $numero >= 0 ){
        $situacao = "Positivo!";
    } 
    else{
        $situacao = "Negativo!";
    }
    
    return [
        "dobro"=> $dobro,
        "triplo"=>$triplo,
        "quadrado"=>$quadrado,
        "situacao"=>$situacao

    ];
 }
 $numero = 5;
 $resultado = analisarNumero ($numero);
 echo "Numero:" . $numero . "<br>";
 echo "dobro:" . $resultado ["dobro"] . "<br>";
 echo "triplo:" . $resultado ["triplo"] . "<br>";
 echo "quadrado:" . $resultado ["quadrado"] . "<br>";
echo "situacao:" . $resultado ["situacao"] . "<br>";
?>