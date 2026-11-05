<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_02</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label for="">Nome do Aluno:</label><br>
        <input type="text" name="nome">
        <br><br>
        <label for="turma">Turma:</label><br>
        <select id="turma" name="turma" required>
            <option value="">Selecione...</option>
            <option value="1º IDS">1º IDS</option>
            <option value="2º IDS">2º IDS</option>
            <option value="3º IDS">3º IDS</option>
        </select>
        <br>
        <p>
            <label for="nota1">Nota 1:</label><br>
            <input type="number" id="nota1" name="nota1" min="0" max="10" step="0.1" required>
        </p>

        <p>
            <label for="nota2">Nota 2:</label><br>
            <input type="number" id="nota2" name="nota2" min="0" max="10" step="0.1" required>
        </p>

        <p>
            <label for="nota3">Nota 3:</label><br>
            <input type="number" id="nota3" name="nota3" min="0" max="10" step="0.1" required>
        </p>

        <p>
            <label for="faltas">Faltas:</label><br>
            <input type="number" id="faltas" name="faltas" min="0" max="80" required>
        </p>
        <br>
        <button type="submit">Gerar Boletim</button>
    </form>
</body>
</html>