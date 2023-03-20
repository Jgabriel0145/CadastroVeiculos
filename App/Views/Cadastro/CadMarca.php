<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Marcas</title>

    <?php include 'style.php'?>
</head>

<body>
    <div>
    <form method="post" action="/marca/form/save">
        <h1>Marca</h1>

        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <label for="nome_marca">Nome:</label>
        <input type="text" placeholder="Ex: Uno, Camaro, etc..." name="nome_marca" id="nome_marca" value="<?= $model->marca ?>"
                maxlength="255"><br>

        <br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    <button onclick="document.location='/'" >Voltar</button>
    </div>


</body>
</html>