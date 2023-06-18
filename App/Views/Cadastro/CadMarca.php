<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Marcas</title>

    <style>
        body{
            background-image: url('/Views/img/Fundo_Marcas.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            overflow: hidden;
            width: 100vw;
        }

    </style>

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
        <button class="enviar" type="submit">Enviar</button>
    </form>

    <br>
    <button class="voltar" onclick="document.location='/'" >Página Inicial</button>
    </div>


</body>
</html>