<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Combustíveis</title>

    <?php include 'style.php'?>
    <style>
        body{
            background-image: url('/Views/img/posto_gasolina.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

    </style>
</head>

<body>
    
    <div>
        <form method="post" action="/combustivel/form/save">
            <h1>Combustível</h1>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome_combustivel">Nome:</label>
            <input type="text" placeholder="Digite seu combustível" name="nome_combustivel" id="nome_combustivel" value="<?= $model->nome ?>"
                maxlength="255">
            <br><br>

            <button class="voltar" onclick="document.location='/'" >Voltar</button>    
            <button class="enviar" type="submit">Enviar</button>
            
            
        </form>

        <br>
        
        

    </div>

</body>
</html>