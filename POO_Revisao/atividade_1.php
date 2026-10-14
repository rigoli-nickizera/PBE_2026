<?php

class Aluno {
    private $nome;
    private $nota;


    public function __construct($nome, $nota=0){
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getStatus(){
        if($this->nota >= 6){
            return "Aprovado!";
        }else{
            RETURN "Reprovado!";
        }
    }
}

$aluno1 = new Aluno("Nicoli", 8);

echo "<pre>";
print_r($aluno1);
echo "</pre>";

$aluno2 = new Aluno("Helena", 5);

echo "<pre>";
print_r($aluno2);
echo "</pre>";


