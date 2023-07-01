<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            border: 0;
        }

        html
        {
            height: 100%;
            width: auto;
        }

        body
        {
            width: 100%;
            height: auto;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("/Views/img/Fundo_Inicial.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
        }

        button
        {
            text-align: center;
            background-color: dodgerblue;
            border: none;
            border-radius: 12px;
            color: #FFFFFF;
            font-size: 12pt;
            padding: 5px;
            width: 100%;
            min-width: 120px;
            height: 100%;
            min-height: 40px;
        }

        button:hover
        {
            background-color: deepskyblue;
            cursor: pointer;    
        }

        #conteudo
        {
            width: 50%;
            height: auto;
            background-color: rgba(0, 0, 0, 0.9);
            color: #FFFFFF;
            margin: 1%;
            padding: 2%;
            border-radius: 15px;
        }

        #conteudo h1
        {
            text-align: center;
        }

        #separacao
        {
            display: flex;
            justify-content: space-around;
            margin-top: 2%;
            width: 100%;
        }

        .item
        {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .item h3
        {
            text-align: center;
        }

        .item-botao
        {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .btn-espaco
        {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div id="conteudo">
        <h1>Cadastro de Veículos</h1>
        <br><br>

        <div id="separacao">
            <div class="separacao-item">
                <div class="item">
                    <h3>Combustível:</h3>
                    <br>
                    <div class="item-botao">
                        <button onclick="document.location='/combustivel/form'" class="btn-espaco">Cadastro</button>
                        <button onclick="document.location='/combustivel'" >Listagem</button>                        
                    </div>
                </div>

                <br><br>

                <div class="item">
                    <h3>Fabricante:</h3>
                    <br>
                    <div class="item-botao">
                        <button onclick="document.location='/fabricante/form'" class="btn-espaco">Cadastro</button>
                        <button onclick="document.location='/fabricante'" >Listagem</button>
                    </div>
                </div>

                <br><br>

                <div class="item">
                    <h3>Marca:</h3>
                    <br>
                    <div class="item-botao">
                        <button onclick="document.location='/marca/form'" class="btn-espaco">Cadastro</button>
                        <button onclick="document.location='/marca'" >Listagem</button>
                    </div>
                </div>
            </div>
            
            <div class="separacao-item">
                <div class="item">
                    <h3>Tipo:</h3>
                    <br>
                    <button onclick="document.location='/tipo/form'" class="btn-espaco">Cadastro</button>
                    <button onclick="document.location='/tipo'" >Listagem</button>
                </div>

                <br><br>

                <div class="item">
                    <h3>Veículo:</h3>
                    <br>
                    <div class="item-botao">
                        <button onclick="document.location='/veiculo/form'" class="btn-espaco">Cadastro</button>
                        <button onclick="document.location='/veiculo'" >Listagem</button>
                    </div>
                </div>

                <br><br>

                <div class="item">
                    <h3>Backup:</h3>
                    <br>
                    <div class="item-botao">
                        <button onclick="document.location='/backup/exportar'" class="btn-espaco">Exportar</button>
                        <button onclick="document.location='/backup/importar'" >Importar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>