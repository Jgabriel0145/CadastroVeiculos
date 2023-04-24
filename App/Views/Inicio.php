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
            display: flex;
        }
        #div1
        {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 2.5%;
            position:absolute;
            left: -500px;
            height:800px;
            width:300px;
            border-radius: 15px;
            color: #fff;
            z-index:2;
        }
        #div2{
            z-index:2;
            margin:10px;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 2.5%;
            position:absolute;
            left:-200px;
            height:800px;
            width:300px;
            border-radius: 15px;
            color: #fff;
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

        img{
            position:relative;
            top:-1;
            width:100%;
            height:100%;
        }

        #aside {
            z-index:1;
            position:relative;
            background: #000; 
            width: 19%;
            height: 490px; 
            margin-top: 10px; 
            margin-bottom: 10px;
            margin-right:10px;
        }


        
    </style>
</head>

<body>

    <img src="Views/img/tela_fundo.jpg" height="969px" width="1990px" alt="carro na estrada">
    
 
    
    <div id="aside">
        <div id="div1">
            <div class="itemdiv">
                <h1>Cadastro de Veículos</h1>
                <p>Combustível:</p>
                <button onclick="document.location='/combustivel/form'" >Cadastro</button><br>
                <button onclick="document.location='/combustivel'" >Listagem</button><br><br>
            </div>
            
            <div class="itemdiv">
                <p>Fabricante:</p>
                <button onclick="document.location='/fabricante/form'" >Cadastro</button><br>
                <button onclick="document.location='/fabricante'" >Listagem</button><br><br>
            </div>


            <div class="itemdiv">
                <p>Marca:</p>
                <button onclick="document.location='/marca/form'" >Cadastro</button><br>
                <button onclick="document.location='/marca'" >Listagem</button><br><br>
            </div>
        </div>
        
        
        <div id="div2">
            <div class="itemdiv">
                <p>Tipo:</p>
                <button onclick="document.location='/tipo/form'" >Cadastro</button><br>
                <button onclick="document.location='/tipo'" >Listagem</button><br><br>
            </div>    
            
            <div class="itemdiv">
                <p>Veículo:</p>
                <button onclick="document.location='/veiculo/form'" >Cadastro</button><br>
                <button onclick="document.location='/veiculo'" >Listagem</button><br><br>
            </div>
        </div>
    </div>




</body>
</html>