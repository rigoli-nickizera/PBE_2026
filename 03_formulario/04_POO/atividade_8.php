<?php
class Funcionario{
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual)
    {
        if ($percentual > 0 && $percentual <= 10){
            $aumento = $this->salario * ($percentual / 100);
            $this->salario += $aumento;
        } else {
            echo "Erro: o percentual de aumento deve ser maior que 0% e menor ou igual a 10% <br>";
        }
    }

    public function exibirSalario()
    {
        echo "Funcionário: " . $this->nome ;
        echo "Salário: R$  " . $this->salario ;
    }
}
$func = new Funcionario("Nicoli -", 3000);
$func->aumentarSalario(10);
$func->exibirSalario();
?>
