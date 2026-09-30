<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inscrição em Evento</title>
</head>

<body>

    <h2 style="color:#7A027C; font-family:Comic Sans MS, cursive;">Inscrição em Evento</h2>

    <form action="Logica.php" method="POST" style="background:#f3e5f5; padding: 15px; border-radius:8px; width:350px">

        <label>Nome Completo:</label>
        <br>
        <input type="text" name="nome" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;" required>

        <label>Tipo de ingresso:</label><br>

        <select name="ingresso" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;" required>
            <option value="Estudante">Estudante</option>
            <option value="Profissional">Profissional</option>
            <option value="VIP">VIP</option>
        </select>

        <label>Data do Evento:</label><br>
        <input type="date" name="data" style="color:purple; font-family:Arial;" required>
        <br><br>

        <label>Hora de Chegada:</label><br>
        <input type="time" name="hora" style="color:purple; font-family:Arial;" required>
        <br><br>

        <button type="submit" style="background:purple; color:white; padding:5px 10px;"> Inscrever-se </button>
    </form>
</body>
</html>