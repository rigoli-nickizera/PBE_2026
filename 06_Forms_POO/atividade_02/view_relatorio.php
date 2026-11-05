
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Boletim Escolar</h1>

    <p>Nome: <?= $aluno->getNome() ?></p>
    <p>Turma: <?= $aluno->getTurma() ?></p>
    <p>Nota 1: <?= $aluno->getNota1() ?></p>
    <p>Nota 2: <?= $aluno->getNota2() ?></p>
    <p>Nota 3: <?= $aluno->getNota3() ?></p>
    <p>Média: <?= number_format($aluno->calcularMedia(), 1, ',', '.') ?></p>
    <p>Faltas: <?= $aluno->getFaltas() ?></p>
    <p>Frequência: <?= number_format($aluno->calcularFrequencia(), 1, ',', '.') ?>%</p>
    <h2>Situação: <?= $aluno->verificarSituacao() ?></h2>

    <?php if ($aluno->verificarSituacao() == "Aprovado"): ?>
        <p>Parabéns, continue assim!</p>

    <?php else: ?>
        <p>Atenção: procure o professor para saber os próximos passos.</p>
    <?php endif ?>

    <a href="view.php">Cadastrar outro aluno</a>

</body>
</html>
