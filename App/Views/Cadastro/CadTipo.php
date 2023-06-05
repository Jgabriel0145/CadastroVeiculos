<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Tipos</title>

    <style>
        body{
            background-image: url('/Views/img/Fundo_Tipo.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

    </style>

    <?php include 'style.php'?>
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
            <button type="submit">Enviar</button>
        </form>
        
        <br>
        <button onclick="document.location='/'" >Voltar</button>
    </div>



</body>
</html>