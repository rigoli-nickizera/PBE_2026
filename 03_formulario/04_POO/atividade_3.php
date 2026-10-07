<?php
class Aula{
    public $disciplinha;
    public $professor;
    public $duracao;
    public $numero;
    public $bloco;

    function exibirInformação(){
        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Número da sala: $this->numero <br>";
        echo "Bloco: $this->bloco <br>";
    }


    function trocarProfessor($professor){
        $this->professor = $professor;
        echo "O novo professor é: $this->professor";
    }


    function alterarLocal($novo_bloco, $novo_numero_sala){
        $this->n_sala = $novo_numero_sala;
        $this->bloco = $novo_bloco;

        echo "Onovo local é $this->bloco $this->n_sala <br>";
    }
}

//criando aula1
$aula1 = new Aula();


    $aula1->disciplina = "Programação";
    $aula1->professor = "Gabriel";
    $aula1->duracao = 4;
    $aula1->numero = 2;
    $aula1->bloco = "Anexo";

    $aula1->exibirInformação();
    $aula1->trocarProfessor("Leonardo");
    $aula1->alterarLocal("B", 10);
    $aula1->exibirInformação();

//criando aula2
$aula2 = new Aula();


    $aula2->disciplina = "Português";
    $aula2->professor = "Michele";
    $aula2->duracao = 4;
    $aula2->numero = 2;
    $aula2->bloco = 2;

    $aula2->exibirInformação();
    $aula2->trocarProfessor("Gustavo");
    $aula2->alterarLocal("A", 3);
    $aula2->exibirInformação();





