
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Locação</title>
</head>

<body>

    <h1>Contrato de Locação</h1>

    <h2>Dados do Cliente</h2>
    <p><strong>Cliente:</strong> <?=$nome ?></p>
    <p><strong>E-mail:</strong> <?= $email ?></p>
    <p><strong>Retirada:</strong> <?= $data_retirada ?></p>
    <p><strong>Devolução:</strong> <?= $dia ?></p>

    <h2>Adicionais</h2>
    <p><strong>Seguro total:</strong> <?=$seguro?></p>
    <p><strong>GPS:</strong> <?= $gps ?></p>
    <p><strong>Cadeirinha infantil:</strong> <?= $cadeira?></p>

    <h2>Itens da Locação</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Item</th>
                <th>Diária</th>
                <th>Dias</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>
                <tr>
                    <td><?= $categoria;?></td>
                    <td> <?= $data_retirada; ?></td>
                    <td><?= $dia;?></td>
                    <td>R$ <?=  $subtotal; ?></td>
                </tr>

        </tbody>
    </table>

    <h2>Total da Compra: R$ <?= number_format((float) $total, 2, ',', '.') ?></h2>

    <?php if ($desconto > 0): ?>
        <h3>Parabéns! Você ganhou um desconto!</h3>
    <?php endif; ?>

    <p>
        <strong>Desconto:</strong>
        R$ <?= number_format((float) $percentualDesconto, 2, ',', '.') ?>
    </p>

    <h2>
        Total a Pagar: R$ <?= number_format((float) $total, 2, ',', '.') ?>
    </h2>

</body>
</html>
