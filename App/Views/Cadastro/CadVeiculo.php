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

    <style>
        *
        {
            padding: 0;
            margin: 0;
            border: 0;
        }

        html
        {
            width: 100%;
            height: auto;
        }

        body
        {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: auto;
        }

        div
        {
            background-color: rgb(0, 0, 0);
            border-radius: 15px;
            color: #fff;
        }

        input
        {
            padding: 10px;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
        }

        button
        {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 45%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            display: inline-block;
        }

        .enviar
        {
            background-color:#289942;
            width: 100%;
        }

        .voltar
        {
            margin: 2% 0 0 0;
            background-color:#e32d2d;
            width: 100%;
        }

        button:hover
        {
            background-color: #3ac95b;
            cursor: pointer;
        }

        .voltar:hover
        {
            background-color:#bd0d0d;
        }

        .irLista
        {
            cursor: pointer;
        }

        /*Style fixo*/

        /*Style variável*/

        body
        {
            background-image: url("/Views/img/Fundo_Veiculo.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 1%;
        }

        #cad_veiculo
        {
            background-color: rgba(0, 0, 0, 0.9);
            width: 50vw;
            height: auto;
        }

        .formulario
        {
            padding: 2%;
        }

        .area_label_input
        {
            background-color: rgb(0, 0, 0);
            padding: 1%;
        }

        .label_input
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-inline: 20%;
            margin-top: 1%;
        }

        .label_input select
        {
            width: 10vw;
            height: 25px;
            margin: 5%;
            border-radius: 5px;
        }

        .input_checkbox
        {
            height: 20px;
            width: 20px;
        }

        #btn_enviar_cad_veiculo
        {
            width: 100%;
            background-color: #289942;
        }

        #btn_enviar_cad_veiculo:hover
        {
            background-color: #3ac95b;
            cursor: pointer;
        }

        .btn_voltar
        {
            width: 100%;
            display: flex;
            justify-content: center;
            background-color: transparent;
            margin-bottom: 2%;
        }

        #btn_voltar_cad_veiculo
        {
            width: 96%;
            background-color: #bd0d0d;   
        }

        #btn_voltar_cad_veiculo:hover
        {
            background-color: #e32d2d;
        }
    </style>

</head>

<body>
    <div id="cad_veiculo">
        <form action="/veiculo/form/save" method="post" class="formulario">
            <h1 style="text-align:center; margin-bottom: 2%;">Veículo</h1>

            <input type="hidden" value="<?= $model_veiculo->id ?>" name="id" />

            <div id="area_label_input">
                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="id_marca_veiculo">Marca:</label>
                    </div>

                    <div class="label_input_itens">
                        <select name="id_marca_veiculo" id="id_marca_veiculo">
                            <?php foreach ($model_marca->rows as $item_marca): ?>
                                <?php if (count($model_marca->rows) == 0):?>
                                    <span>Nenhum registro encontrado.</span>
                                <?php else: ?>
                                    <option value="<?= $item_marca->id ?>"><?= $item_marca->marca ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select><br>
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="id_fabricante_veiculo">Fabricante:</label>
                    </div>

                    <div class="label_input_itens">
                        <select name="id_fabricante_veiculo" id="id_fabricante_veiculo">
                            <?php foreach ($model_fabricante->rows as $item_fabricante): ?>
                                <?php if (count($model_fabricante->rows) == 0):?>
                                    <span>Nenhum registro encontrado.</span>
                                <?php else: ?>
                                    <option value="<?= $item_fabricante->id ?>"><?= $item_fabricante->nome ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select><br>
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="id_tipo_veiculo">Tipo:</label>
                    </div>

                    <div class="label_input_itens">
                        <select name="id_tipo_veiculo" id="id_tipo_veiculo">
                            <?php foreach ($model_tipo->rows as $item_tipo): ?>
                                <?php if (count($model_tipo->rows) == 0):?>
                                    <span>Nenhum registro encontrado.</span>
                                <?php else: ?>
                                    <option value="<?= $item_tipo->id ?>"><?= $item_tipo->tipo ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select><br>
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="id_combustivel_veiculo">Combustível:</label>
                    </div>

                    <div class="label_input_itens">
                        <select name="id_combustivel_veiculo" id="id_combustivel_veiculo">
                            <?php foreach ($model_combustivel->rows as $item_combustivel): ?>
                                <?php if (count($model_combustivel->rows) == 0):?>
                                    <span>Nenhum registro encontrado.</span>
                                <?php else: ?>
                                    <option value="<?= $item_combustivel->id ?>"><?= $item_combustivel->nome ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select><br>
                    </div>
                </div>     
            </div>

            <br>
            <br>

            <div class="area_label_input">
                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="modelo_veiculo">Modelo:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="text" name="modelo_veiculo" id="modelo_veiculo" value="<?= $model_veiculo->modelo ?>"
                            maxlength="255"><br>
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="ano_veiculo">Ano:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="text" name="ano_veiculo" id="ano_veiculo" value="<?= $model_veiculo->ano ?>"
                            minlength="4" maxlength="4"><br>
                    </div>
                </div>
                
                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="cor_veiculo">Cor:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="text" name="cor_veiculo" id="cor_veiculo" value="<?= $model_veiculo->cor ?>"
                            maxlength="255"><br>
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="numero_chassi_veiculo">Número do Chassi:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="text" name="numero_chassi_veiculo" id="numero_chassi_veiculo" value="<?= $model_veiculo->numero_chassi ?>"
                            maxlength="17" minlength="17"><br>
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="km_veiculo">KM:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="text" name="km_veiculo" id="km_veiculo" value="<?= $model_veiculo->km ?>"
                            maxlength="255" minlength="1"><br>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="area_label_input">
                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="revisao_veiculo">Revisão:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="checkbox" name="revisao_veiculo" id="revisao_veiculo"
                            class="input_checkbox">
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="sinistro_veiculo">Sinsitro:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="checkbox" name="sinistro_veiculo" id="sinistro_veiculo"
                            class="input_checkbox">
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="roubo_furto_veiculo">Roubo ou Furto:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="checkbox" name="roubo_furto_veiculo" id="roubo_furto_veiculo"
                            class="input_checkbox">
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="aluguel_veiculo">Aluguel:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="checkbox" name="aluguel_veiculo" id="aluguel_veiculo"
                            class="input_checkbox">
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="venda_veiculo">Venda:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="checkbox" name="venda_veiculo" id="venda_veiculo"
                            class="input_checkbox">
                    </div>
                </div>

                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="particular_veiculo">Particular:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="checkbox" name="particular_veiculo" id="particular_veiculo"
                            class="input_checkbox">
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="area_label_input">
                <div class="label_input">
                    <div class="label_input_itens">
                        <label for="observacao_veiculo">Observação:</label>
                    </div>

                    <div class="label_input_itens">
                        <input type="text" name="observacao_veiculo" id="observacao_veiculo" value="<?= $model_veiculo->observacao ?>"
                            maxlength="255"><br>
                    </div>
                </div>
            </div>

            <br>

            <button id="btn_enviar_cad_veiculo" type="submit">Enviar</button>
        </form>
        
        <div class="btn_voltar">
            <button id="btn_voltar_cad_veiculo" onclick="document.location='/'">Página Inicial</button>
        </div>
        
    </div>


</body>
</html>