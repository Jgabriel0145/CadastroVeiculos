<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Tipos</title>
    <?php include 'style.php'?>

    <style>
        body
        {
            background-image: url('/Views/img/Fundo_Tipo.jpg');
        }

    </style>

</head>

<body> 
    <div>
        <form method="post" action="/tipo/form/save">
            <h1>Tipo</h1>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome_tipo">Nome:</label>
            <input type="text" placeholder="Ex: Carro, Moto, etc..."  name="nome_tipo" id="nome_tipo" value="<?= $model->tipo ?>"
                maxlength="255">
            <br><br>
            <button class="enviar" type="submit">Enviar</button>
        </form>
        
        <br>
        <button class="voltar" onclick="document.location='/'" >Página Inicial</button>
    </div>
</body>
</html>