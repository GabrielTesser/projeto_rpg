<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de fichas</title>
</head>

<body>
    <h1>Lista de fichas</h1>
    <table>
        <tr>
            <th>Deletar</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Nome do jogador</th>
            <th>Classe</th>
            <th>Raça</th>
            <th>Força</th>
            <th>Destreza</th>
            <th>Vigor</th>
            <th>Inteligencia</th>
            <th>Sabedoria</th>
            <th>Carisma</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
            <tr>
                <td><a href="/ficha/delete?id=<?= $item->id ?>">X</a></td>
                <td><?= $item->id ?></td>
                <td><a href="/ficha/form?id=<?= $item->id ?>">
                <?= $item->nome ?></a></td>
                <td><?= $item->nome_jogador ?></td>
                <td><?= $item->raca ?></td>
                <td><?= $item->classe ?></td>
                <td><?= $item->forca ?></td>
                <td><?= $item->destreza ?></td>
                <td><?= $item->vigor ?></td>
                <td><?= $item->inteligencia ?></td>
                <td><?= $item->sabedoria ?></td>
                <td><?= $item->carisma ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>