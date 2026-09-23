<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 02</title>
</head>

<body>

    <h1>Carrinho de compras</h1>

    <form action="logica.php" method="POST">
        <h2>Dados do Cliente</h2>
        <label>Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
         
        <h2>Produto 1</h2>
        <label>Nome do produto:</label>
        <br>
        <input type="text" name="nome1">
        <br>
        <label>Preço:</label>
        <br>
        <input type="number" name="preco1">
        <br>
        <label>Quantidade:</label>
        <br>
        <input type="number" name="quantidade1">
        <br><br>


        <h2>Produto 2</h2>
        <label>Nome do produto:</label>
        <br>
        <input type="text" name="nome2">
        <br>
        <label>Preço:</label>
        <br>
        <input type="number" name="preco2">
        <br>
        <label>Quantidade:</label>
        <br>
        <input type="number" name="quantidade2">
        <br><br>


        <h2>Produto 3</h2>
        <label>Nome do produto:</label>
        <br>
        <input type="text" name="nome3">
        <br>
        <label>Preço:</label>
        <br>
        <input type="number" name="preco3">
        <br>
        <label>Quantidade:</label>
        <br>
        <input type="number" name="quantidade3">
        <br><br>


        <button type="submit" style= "background-color:blue; color:white;" >Finalizar Compra</button>

    </form>

</body>

</html>