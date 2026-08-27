<?php

function analisarNotas ($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3)/3;
    $notas = [$nota1, $nota2, $nota3];
    $maior = $notas[0];
    $menor = $notas [0];

    foreach ($notas as $nota){
        if ($nota > $maior){
            $maior = $nota;
        }
        else {
            $menor = $nota;
        }
    }

    if ($media >= 7){
        $situacao = "Aprovado";
    }
    elseif ($media >= 5 && $media < 7){
        $situacao = "Recuperação";
    }
    else{
        $situacao = "Reprovado";
    }

    return [
        "média" => $media,
        "maior nota" => $maior,
        "menor nota" => $menor,
        "situação" => $situacao
    ];
}
    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 8;

    $resultado = analisarNotas ($nota1, $nota2, $nota3);
    echo "A média do aluno foi:" . $resultado ["média"]. "<br>";
    echo "A maior nota foi:". $resultado ["maior nota"]. "<br>";
    echo "A menor nota foi:". $resultado ["menor nota"]. "<br>";
    echo "A situação do aluno foi:". $resultado ["situação"]. "<br>";

?>