<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 5</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>

    <p><b>Nome:</b><?=$nome ?></p>
    <p><b>Peso:</b><?=$peso_kg ?></p>
    <p><b>Altura:</b><?=$altura_metros ?></p>
    <p><b>Resultado IMC:</b><?=$imc ?></p>
    

    <?php if ($imc < 18.5):?>
        <p><b>Abaixo do peso</b></p>

    <?php elseif ($imc >= 18.5 or $imc <= 24.9):?>
        <p><b>Peso normal</b></p>
      
    <?php elseif ($imc >= 25 or $imc <= 29.9):?>
        <p><b>Sobrepeso</b></p>
       
    <?php else: ?>
       <p><b>Obesidade simples</b></p>
       
    <?php endif ?>

</body>
</html>