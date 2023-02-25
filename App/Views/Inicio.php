<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início</title>
    <style>
        html
        {
            height: 100%;
            width: 100%;
        }
        
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
            display: flex;
            justify-content: center;
        }

        #div1, #div2
        {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 2.5%;
            border-radius: 15px;
            color: #fff;
            margin: 1%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        input
        {
            padding: 15px;
            outline: none;
            font-size: 15px;
            border-radius: 10px;

        }

        button
        {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            margin-top: 5px;
            
        }

        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        
        
    </style>
</head>

<body>
    
    <div id="div1">
        <div id="itemdiv">
            <p>Combustível:</p>
            <button onclick="document.location='/combustivel/form'" >Cadastro de Combustíveis</button><br>
            <button onclick="document.location='/combustivel'" >Listagem de Combustíveis</button><br><br>
        </div>
        
        <div id="itemdiv">
            <p>Fabricante:</p>
            <button onclick="document.location='/fabricante/form'" >Cadastro de Fabricantes</button><br>
            <button onclick="document.location='/fabricante'" >Listagem de Fabricantes</button><br><br>
        </div>

        <div id="itemdiv">
            <p>Marca:</p>
            <button onclick="document.location='/marca/form'" >Cadastro de Marca</button><br>
            <button onclick="document.location='/marca'" >Listagem de Marca</button><br><br>
        </div>
    </div>
    
    <br>
    <div id="div2">
        <div id="itemdiv">
            <p>Tipo:</p>
            <button onclick="document.location='/tipo/form'" >Cadastro de Tipos de Veículos</button><br>
            <button onclick="document.location='/tipo'" >Listagem de Tipos de Veículos</button><br><br>
        </div>    
        
        <div id="itemdiv">
            <p>Veículo:</p>
            <button onclick="document.location='/veiculo/form'" >Cadastro de Veículos</button><br>
            <button onclick="document.location='/veiculo'" >Listagem de Veículos</button><br><br>
        </div>
    </div>



</body>
</html>