<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Fabricantes</title>

    <style>
        body{
            background-image: url('/Views/img/Fundo_Fabricante.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100vw;
            overflow: hidden;
        }

    </style>

    <?php include 'style.php'?>
</head>

<body>
    
<div>
    <form method="post" action="/fabricante/form/save">
        <h1>Fabricante</h1>

        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <label for="nome_fabricante">Nome:</label>
        <input type="text" placeholder="Ex: Ford, Fiat, etc..." name="nome_fabricante" id="nome_fabricante" value="<?= $model->nome ?>"
                maxlength="255"><br><br>

        <label for="cnpj_fabricante">CNPJ:</label>
        <input type="text" placeholder="12.345.678/0001-01" name="cnpj_fabricante" id="cnpj_fabricante" value="<?= $model->cnpj ?>"
        maxlength="18" minlength="18"><br><br>
        

        <button class="enviar" type="submit">Enviar</button>
        <br>
    </form>

    <br>
    <button class="voltar" onclick="document.location='/'" >Página Inicial</button>

</div>

</body>
</html>