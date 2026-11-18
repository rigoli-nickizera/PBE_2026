<?php

session_start();

$_SESSION['nome'] = "Ana";
$_SESSION['curso'] = "Desenvolvimento de Sistemas";

echo "<h4> Primeiro PRINT </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// criar uma lista e adicionando o valores
// igual o append do python
$_SESSION['turma'][] = [
    "nome" => "Maria",
    "curso" => "ADS"
];

$_SESSION['turma'][] = [
    "nome" => "José",
    "curso" => "TI"
];

echo "<h4> Segundo PRINT </h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<a href='deletar.php'> Apagar </a>";
echo "<br>";
echo "<br>";
echo "<a href='view_relatorio.php'> Exibir dados </a>";
