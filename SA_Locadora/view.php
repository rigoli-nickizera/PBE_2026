<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SA_Locadora</title>
</head>
<body>
    <h1>Dados do Cliente</h1>
    <form action="logica.php" method="POST">

        <label>Nome do cliente:</label>
        <br>
        <input type="text" name="nome">
        <br><br>

        <label>Email:</label>
        <br>
        <input type="text" name="email">
        <br>


        <h1>Dados da Locação</h1>

       <label for="data_retirada">Data de Retirada: </label>
			<br>
			<input type="date" name="data_retirada" placeholder="data_retirada" max="2009-01-01" required>
			<br><br>

        <label for="dia">Quantidade de dias:</label>
			<br>
			<input type="number" id="dia" name="dia" min="1" max="" required>
			<br><br>

        <label for="categoria">Selecione a Categoria:</label>
			<br>
			<select name="categoria" id="categoria">
				<option value="">Selecione...</option>
				<option value="Economico">Econômico - R$ 100,00</option>
				<option value="Intemediario">Intermediário - R$ 150,00</option>
				<option value="SUV">SUV - R$ 250,00</option>
			</select>
			<br><br>

        <h1>Adicionais:</h1>
       <label for="seguro">Seguro Total:</label>
			<br>
			<input type="radio" id="seguro" name="seguro" value="sim" required>Sim
			<br>
			<input type="radio" id="seguro" name="seguro" value="nao">Não
			<br><br>
			

    <label for="gps">GPS:</label>
			<br>
			<input type="radio" id="gps" name="gps" value="sim" required>Sim
			<br>
			<input type="radio" id="gps" name="gps" value="nao">Não
			<br><br>
			

    <label for="cadeira">Cadeirinha Infantil:</label>
			<br>
			<input type="radio" id="cadeira" name="cadeira" value="sim" required>Sim
			<br>
			<input type="radio" id="cadeira" name="cadeira" value="nao">Não
			<br>
			<br><br>
        
        <button type="submit">Gerar Contrato</button>

    </form>
</body>
</html>