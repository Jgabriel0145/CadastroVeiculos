<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Veículos</title>

    <?php 

        $model_veiculo = $model[0];
        $model_marca = $model[1];
        $model_fabricante = $model[2];
        $model_tipo = $model[3];
        $model_combustivel = $model[4];
    ?>

    <?php include 'style.php';?>
    <style>
        html
        {
            height: auto;    
        }
    </style>

</head>

<body>
    <div>
    <form method="post" action="/veiculo/form/save">
        <h1>Veículo</h1>

        <input type="hidden" value="<?= $model_veiculo->id ?>" name="id" />

        <label for="modelo_veiculo">Modelo:</label>
        <input type="text" name="modelo_veiculo" id="modelo_veiculo" value="<?= $model_veiculo->modelo ?>"><br>

        <label for="ano_veiculo">Ano:</label>
        <input type="text" name="ano_veiculo" id="ano_veiculo" value="<?= $model_veiculo->ano ?>"><br>

        <label for="cor_veiculo">Cor:</label>
        <input type="text" name="cor_veiculo" id="cor_veiculo" value="<?= $model_veiculo->cor ?>"><br>

        <label for="numero_chassi_veiculo">Número do Chassi:</label>
        <input type="text" name="numero_chassi_veiculo" id="numero_chassi_veiculo" value="<?= $model_veiculo->numero_chassi ?>"><br>

        <label for="km_veiculo">KM:</label>
        <input type="text" name="km_veiculo" id="km_veiculo" value="<?= $model_veiculo->km ?>"><br>

        <label for="revisao_veiculo">Revisão:</label>
        <input type="checkbox" name="revisao_veiculo" id="revisao_veiculo"><br>

        <label for="sinistro_veiculo">Sinistro:</label>
        <input type="checkbox" name="sinistro_veiculo" id="sinistro_veiculo"><br>

        <label for="roubo_furto_veiculo">Roubo ou Furto:</label>
        <input type="checkbox" name="roubo_furto_veiculo" id="roubo_furto_veiculo"><br>

        <label for="aluguel_veiculo">Aluguel:</label>
        <input type="checkbox" name="aluguel_veiculo" id="aluguel_veiculo"><br>

        <label for="venda_veiculo">Venda:</label>
        <input type="checkbox" name="venda_veiculo" id="venda_veiculo"><br>

        <label for="particular_veiculo">Particular:</label>
        <input type="checkbox" name="particular_veiculo" id="particular_veiculo"><br>

        <label for="observacao_veiculo">Observação:</label>
        <input type="text" name="observacao_veiculo" id="observacao_veiculo" value="<?= $model_veiculo->observacao ?>"><br>

        <label for="id_marca_veiculo">Marca:</label>
        <select name="id_marca_veiculo" id="id_marca_veiculo">
            <?php foreach ($model_marca->rows as $item_marca): ?>
                <?php if (count($model_marca->rows) == 0):?>
                    <span>Nenhum registro encontrado.</span>
                <?php else: ?>
                    <option value="<?= $item_marca->id ?>"><?= $item_marca->marca ?></option>
                <?php endif ?>
            <?php endforeach ?>
        </select><br>

        <label for="id_fabricante_veiculo">Fabricante:</label>
        <select name="id_fabricante_veiculo" id="id_fabricante_veiculo">
            <?php foreach ($model_fabricante->rows as $item_fabricante): ?>
                <?php if (count($model_fabricante->rows) == 0):?>
                    <span>Nenhum registro encontrado.</span>
                <?php else: ?>
                    <option value="<?= $item_fabricante->id ?>"><?= $item_fabricante->nome ?></option>
                <?php endif ?>
            <?php endforeach ?>
        </select><br>

        <label for="id_tipo_veiculo">Tipo de Veículo:</label>
        <select name="id_tipo_veiculo" id="id_tipo_veiculo">
            <?php foreach ($model_tipo->rows as $item_tipo): ?>
                <?php if (count($model_tipo->rows) == 0):?>
                    <span>Nenhum registro encontrado.</span>
                <?php else: ?>
                    <option value="<?= $item_tipo->id ?>"><?= $item_tipo->tipo ?></option>
                <?php endif ?>
            <?php endforeach ?>
        </select><br>

        <label for="id_combustivel_veiculo">Combustível:</label>
        <select name="id_combustivel_veiculo" id="id_combustivel_veiculo">
            <?php foreach ($model_combustivel->rows as $item_combustivel): ?>
                <?php if (count($model_combustivel->rows) == 0):?>
                    <span>Nenhum registro encontrado.</span>
                <?php else: ?>
                    <option value="<?= $item_combustivel->id ?>"><?= $item_combustivel->nome ?></option>
                <?php endif ?>
            <?php endforeach ?>
        </select><br>

        <br>
        <button type="submit">Enviar</button>

    </form>
    
    <br>
    <button onclick="document.location='/'" >Voltar</button>
    </div>



</body>
</html>