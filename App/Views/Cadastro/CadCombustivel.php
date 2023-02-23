<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Combustíveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    
    <form method="post" action="/combustivel/form/save">
        <h1>Combustível</h1>

        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <label for="nome_combustivel">Nome:</label>
        <input type="text" name="nome_combustivel" id="nome_combustivel" value="<?= $model->nome ?>">

        <button type="submit">Enviar</button>

    </form>

    <br><br>
    <button onclick="document.location='/'" >Voltar</button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>