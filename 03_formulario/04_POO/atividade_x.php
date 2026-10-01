<?php

class Celular {
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar(){
        $this->ligado= true;
        echo "O celular foi ligado <br>";
    }

    function desligar(){
        $this->ligado=false;
        echo "O celular foi desligado <br>";
    }

    function usar($consumir){
        $this->bateria = $this->bateria - $consumir;
        if($this->bateria < 0){
            $this->bateria = 0;
        }

        echo "A bateria foi consumida em $consumir <br>";
        echo "Sobrando um total de $this->bateria";
    }

    function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria > 100){
            $this->bateria = 100;
        }
        echo"A bateria foi CARREGADA em $carga";
        echo"Aumentando a bateria para $this->bateria";
    }
}

//objeto(criando celular1)
$celular1 = new Celular();

    $celular1->marca = "Samsung";
    $celular1->modelo = "S25";
    $celular1->cor = "Preto";
    $celular1->bateria = 100;
    $celular1->ligado = true;

    echo "Marca:" . $celular1->marca . "<br>";
    echo "Modelo:" . $celular1->modelo . "<br>";
    echo "Cor:" . $celular1->cor . "<br>";
    echo "Bateria:" . $celular1->bateria . "<br>";
    echo "Ligado:" . $celular1->ligado . "<br>";

    $celular1->ligar();
    $celular1->usar(50);
    $celular1->carregar(100);
    $celular1->desligar();

//objeto (criando celular2)
$celular2 = new Celular();

    $celular2->marca = "Iphone";
    $celular2->modelo = "17 pro max";
    $celular2->cor = "Laranja";
    $celular2->bateria = 50;
    $celular2->ligado = true;

    echo "Marca:" . $celular2->marca . "<br>";
    echo "Modelo:" . $celular2->modelo . "<br>";
    echo "Cor:" . $celular2->cor . "<br>";
    echo "Bateria:" . $celular2->bateria . "<br>";
    echo "Ligado:" . $celular2->ligado . "<br>";

    $celular2->ligar();
    $celular2->usar(50);
    $celular2->carregar(90);
    $celular2->desligar();

