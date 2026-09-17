<?php

$nome = $_POST ['nome'];
$peso_kg = $_POST['peso_kg'];
$altura_metros= $_POST['altura_metros'];

$imc = $peso_kg / ($altura_metros * $altura_metros) / $peso_kg;

if ($imc > 10) {
        $imc = 10;
    }

require_once "view_relatorio.php"
?>