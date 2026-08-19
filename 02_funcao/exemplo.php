<?php
$frequencia1 = 90;
$nota = 9;
$frequencia2 = 80;
$nota= 8;
$frequencia3 = 85;
$nota = 8;

if ($frequencia1 <= 75 ) {
    echo "Reprovado por falta!";
}
elseif ($nota >=9 ) {
    echo "Aprovado!";
}
elseif ($nota >= 5 ){
    echo "Recuperação!";

}
else {
    echo "Reprovado!";
}

echo "<br>";

if ($frequencia2 <= 75 ) {
    echo "Reprovado por falta!";
}
elseif ($nota >=9 ) {
    echo "Aprovado!";
}
elseif ($nota >= 5 ){
    echo "Recuperação!";

}
else {
    echo "Reprovado!";
}

echo "<br>";

if ($frequencia3 <= 75 ) {
    echo "Reprovado por falta!";
}
elseif ($nota >=9 ) {
    echo "Aprovado!";
}
elseif ($nota >= 5 ){
    echo "Recuperação!";

}
else {
    echo "Reprovado!";
}

?>