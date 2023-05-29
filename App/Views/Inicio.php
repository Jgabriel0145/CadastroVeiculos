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
            background-image: linear-gradient(45deg, cyan, yellow);
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content:center;
        }
        #div1
        {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 2.5%;
            width:20%;
            height:90%;
            
            color: #fff;
            
        }
        #div2{
            background-color: rgba(0, 0, 0, 0.9);
            padding-top:15%;
            padding: 2.5%;
            height:580px;
            width: 15%;
            color: #fff;
            align-items: center;
            
        }
        #div2 .itemdiv {
            position: relative;
            bottom: 100px;
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
            text-align:right;
            display:inline; 
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width:30%;
            border-radius:15px;
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
            position:relative;
            background: #fff; 
            width: 19%;
            height: 490px; 
            margin-top: 10px; 
            margin-bottom: 10px;
            margin-right:10px;
        }
        


        
    </style>
</head>

<body>

    <!-- <img src="Views/img/tela_fundo.jpg" height="969px" width="1990px" alt="carro na estrada"> -->
    
 
    
    <!-- <div id="aside"> -->
        <div id="div1">
            <div class="itemdiv">
                <!-- <img src="C:\Users\Usuario\Desktop\CadastroVeiculos\App\Views\img\carro.png" alt=""> -->
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
                <br><br><br><br><br><br><br>
                <p>Tipo:</p>
                <button onclick="document.location='/tipo/form'" >Cadastro</button><br>
                <button onclick="document.location='/tipo'" >Listagem</button><br><br>
            </div>    
            
            <div class="itemdiv">
                <p>Veículo:</p>
                <button onclick="document.location='/veiculo/form'" >Cadastro</button><br>
                <button onclick="document.location='/veiculo'" >Listagem</button><br><br>
            </div>

            <div class="itemdiv">
                <p>Backup:</p>
                <button onclick="document.location='/backup/exportar'">Exportar Banco</button><br><br>
                <button onclick="document.location='/backup/importar'">Importar Banco</button><br><br>
            </div>
        </div>
    <!--  </div> -->





</body>
</html>