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
        #texto_esquerda
        {
            position:relative;
            right:-300px;
            width:123px;
            top:20px;
            height:520px;
        }
        #inputs_direita
        {
            position:relative;
            left:500px;
            bottom:600px;
            width:200px;
        }
        #cad_veiculos
        {
            width: 1000px;
            background-color: rgba(0, 0, 0, 0.9);
            border-radius: 15px;
            color: #fff;
            height:900px;
        }
        #btnEnv_cadVeiculo
        {
            position:relative;
            bottom:500px;
        }
        #btnEnv_cadVeiculo
        {
            position:relative;
            bottom:500px;
        }
        #btnVol_cadVeiculo{
            position:relative;
            bottom:500px;
        }
        select
        {
            width: 225px;
        }

    </style>

</head>

<body>
    <div id="cad_veiculos">
    <form method="post" action="/veiculo/form/save">
        <h1 style="text-align:center;">Veículo</h1>

        <input type="hidden" value="<?= $model_veiculo->id ?>" name="id" />

        <div id="texto_esquerda">
            <label for="id_marca_veiculo">Marca:</label><br>
            <label for="id_fabricante_veiculo">Fabricante:</label><br>
            <label for="id_tipo_veiculo">Tipo de Veículo:</label><br>
            <label for="id_combustivel_veiculo">Combustível:</label><br><br>
            <label for="modelo_veiculo">Modelo:</label><br><br><br>
            <label for="ano_veiculo">Ano:</label><br><br><br>
            <label for="cor_veiculo">Cor:</label><br><br>
            <label for="numero_chassi_veiculo">Número do Chassi:</label><br><br><br>
            <label for="km_veiculo">KM:</label><br><br><br>
            <label for="revisao_veiculo">Revisão:</label><br>
            <label for="sinistro_veiculo">Sinistro:</label><br>
            <label for="roubo_furto_veiculo">Roubo ou Furto:</label><br>
            <label for="aluguel_veiculo">Aluguel:</label><br>
            <label for="venda_veiculo">Venda:</label><br>
            <label for="particular_veiculo">Particular:</label><br><br>
            <label for="observacao_veiculo">Observação:</label><br>
        </div>


        <div id="inputs_direita">
            <select name="id_marca_veiculo" id="id_marca_veiculo">
                <?php foreach ($model_marca->rows as $item_marca): ?>
                    <?php if (count($model_marca->rows) == 0):?>
                        <span>Nenhum registro encontrado.</span>
                    <?php else: ?>
                        <option value="<?= $item_marca->id ?>"><?= $item_marca->marca ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select><br>

            
            <select name="id_fabricante_veiculo" id="id_fabricante_veiculo">
                <?php foreach ($model_fabricante->rows as $item_fabricante): ?>
                    <?php if (count($model_fabricante->rows) == 0):?>
                        <span>Nenhum registro encontrado.</span>
                    <?php else: ?>
                        <option value="<?= $item_fabricante->id ?>"><?= $item_fabricante->nome ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select><br>

            
            <select name="id_tipo_veiculo" id="id_tipo_veiculo">
                <?php foreach ($model_tipo->rows as $item_tipo): ?>
                    <?php if (count($model_tipo->rows) == 0):?>
                        <span>Nenhum registro encontrado.</span>
                    <?php else: ?>
                        <option value="<?= $item_tipo->id ?>"><?= $item_tipo->tipo ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select><br>

            
            <select name="id_combustivel_veiculo" id="id_combustivel_veiculo">
                <?php foreach ($model_combustivel->rows as $item_combustivel): ?>
                    <?php if (count($model_combustivel->rows) == 0):?>
                        <span>Nenhum registro encontrado.</span>
                    <?php else: ?>
                        <option value="<?= $item_combustivel->id ?>"><?= $item_combustivel->nome ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select><br>

            
            
            <input type="text" name="modelo_veiculo" id="modelo_veiculo" value="<?= $model_veiculo->modelo ?>"
                    maxlength="255"><br>

            
            <input type="text" name="ano_veiculo" id="ano_veiculo" value="<?= $model_veiculo->ano ?>"
                    maxlength="4" minlength="4"><br>

            
            <input type="text" name="cor_veiculo" id="cor_veiculo" value="<?= $model_veiculo->cor ?>"
                    maxlength="255"><br>

            
            <input type="text" name="numero_chassi_veiculo" id="numero_chassi_veiculo" value="<?= $model_veiculo->numero_chassi ?>"
                    maxlength="17" minlength="17"><br>

            
            <input type="text" name="km_veiculo" id="km_veiculo" value="<?= $model_veiculo->km ?>"
                    maxlength="255" minlength="1"><br><br>

            
            <input type="checkbox" name="revisao_veiculo" id="revisao_veiculo"><br>

            
            <input type="checkbox" name="sinistro_veiculo" id="sinistro_veiculo"><br>

            
            <input type="checkbox" name="roubo_furto_veiculo" id="roubo_furto_veiculo"><br>

            
            <input type="checkbox" name="aluguel_veiculo" id="aluguel_veiculo"><br>

            
            <input type="checkbox" name="venda_veiculo" id="venda_veiculo"><br>

            
            <input type="checkbox" name="particular_veiculo" id="particular_veiculo"><br>

            
            <input type="text" name="observacao_veiculo" id="observacao_veiculo" value="<?= $model_veiculo->observacao ?>"
                    maxlength="255">
        </div>

        <button id="btnEnv_cadVeiculo" type="submit">Enviar</button>

    </form>
    
    <br>
    <button id="btnVol_cadVeiculo" onclick="document.location='/'" >Voltar</button>
    </div>



</body>
</html>