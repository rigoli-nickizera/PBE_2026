<?php
$idade = 18;
$acompanhado = "false";

if ($idade >= 18) {
    echo "Pode entrar sozinha!";
}
elseif ($idade < 14 or $idade > 17 ) {
    if ($acompanhado == "true"){
        echo "Entrada liberada!";
    }elseif ($acompanhado == "false") {
        echo "Entrada negada!";
    }
}
else{
    echo "Proibida a entrada!";
}
?>