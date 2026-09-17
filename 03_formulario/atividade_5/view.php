<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade_5</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="">Peso em kg:</label>
        <br>
        <input type="number" name="peso_kg" step="0.01" required>
        <br><br>
         <label for="">Altura em metros:</label>
        <br>
        <input type="number" name="altura_metros" step="0.01" required>
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>
        <br><br>
    </form>
</body>
</html>