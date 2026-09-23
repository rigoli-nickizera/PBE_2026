<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 02</title>
    <h1>Resumo da Compra</h1>
    <h2><strong>Cliente:</strong> <?= $nome ?></h2>

    <table border="1">
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Subtotal</th>
    </tr>
   
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['subtotal'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
    <br>
    <p><b>Desconto:</b> <?= $valorDesconto ?> </p>
    <?php if($desconto > 0): ?>
        <h2>Parabéns você ganhou um desconto!</h2>
    <?php endif ?>
    <h2>Total da Compra 🛍️ : <?= $total ?></h2>



</head>
</html>
   
 