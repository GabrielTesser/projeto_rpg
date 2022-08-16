<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fichas</title>
</head>

<body>
    <fieldset>
        <legend>criação de ficha</legend>

        <form method="post" action="/ficha/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="nome_jogador">Nome da Jogador:</label>
            <input id="nome_jogador" name="nome_jogador" value="<?= $model->nome_jogador ?>" type="text" />
       
            <label for="raca">Raça:</label>
            <input id="raca" name="raca" value="<?= $model->raca ?>" type="text" />
       
            <label for="classe">Classe:</label>
            <input id="classe" name="classe" value="<?= $model->classe ?>" type="text" />
       
            <br><br>

            <label for="forca">Força:</label>
            <input id="forca" name="forca" value="<?= $model->forca ?>" type="number" />

            <label for="destreza">Destreza:</label>
            <input id="destreza" name="destreza" value="<?= $model->destreza ?>" type="number" />

            <label for="vigor">Vigor:</label>
            <input id="vigor" name="vigor" value="<?= $model->vigor ?>" type="number" />

            <label for="inteligencia">Inteligencia:</label>
            <input id="inteligencia" name="inteligencia" value="<?= $model->inteligencia ?>" type="number" />

            <label for="sabedoria">Sabedoria:</label>
            <input id="sabedoria" name="sabedoria" value="<?= $model->sabedoria ?>" type="number" />

            <label for="carisma">Carisma:</label>
            <input id="carisma" name="carisma" value="<?= $model->carisma ?>" type="number" />

            <br><br>


            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>


</html>