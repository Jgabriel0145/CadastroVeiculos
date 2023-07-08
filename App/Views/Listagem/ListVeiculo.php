<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php include 'list-style.php'; ?>

    <style>
        body
        {
            background-image: url('/Views/img/Fundo_Veiculo.jpg');
            padding: 1%;
        }

        div
        {
            padding: 2%;
        }

        a
        {
            color: #FFFFFF;
        }
    </style>

</head>
<body>
    <div>
        <h1>Listagem de Veiculos</h1>
        <br>

        <h6><a href="#atalho">Clique aqui para ver a tabela de forma detalhada</a></h6>
        
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Nº Chassi</th>
                    <th scope="col">KM</th>
                </tr>
            </thead>
    
            <tbody>
                <?php foreach($model->rows as $item_veiculo): ?>
                    <tr>
                        <th scope="row">
                            <a class="btn-excluir" href="/veiculo/delete?id=<?= $item_veiculo->id ?>">Excluir(X)</a>
                        </th>


                        <td>
                            <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->modelo ?></a>
                        </td>

                        <td>
                            <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->ano ?></a>
                        </td>

                        <td>
                            <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->cor ?></a>
                        </td>

                        <td>
                            <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->numero_chassi ?></a>
                        </td>

                        <td>
                            <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->km ?></a>
                        </td>
                    </tr>

                <?php endforeach ?>



                <?php if (count($model->rows) == 0):?>

                    <tr>
                        <th scope="row">
                            <td colspan="6">Nenhum registro foi encontrado.</td>
                        </th>
                    </tr>

                <?php endif?>
            </tbody>
        </table>

        <div class="botao-detalhar">
            <span id="atalho"></span>
            <button id="btn-detalhes">Ver Tabela Detalhada</button>
        </div>       

        <div id="modal-detalhes" class="modal-detalhes">

            <div class="modal-detalhes-content">
                <span class="close">&times;</span>

                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Cor</th>
                            <th scope="col">Nº Chassi</th>
                            <th scope="col">KM</th>
                            <th scope="col">Revisão</th>
                            <th scope="col">Sinistro</th>
                            <th scope="col">Roubo/Furto</th>
                            <th scope="col">Aluguel</th>
                            <th scope="col">Venda</th>
                            <th scope="col">Particular</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Fabricante</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Combustível</th>
                            <th scope="col">Obs.</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        <?php foreach($model->rows as $item_veiculo): ?>
                            <tr>
                                <th scope="row">
                                    <a class="btn-excluir" href="/veiculo/delete?id=<?= $item_veiculo->id ?>">Excluir(X)</a>
                                </th>


                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->modelo ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->ano ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->cor ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->numero_chassi ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->km ?></a>
                                </td>

                                <td>
                                    <?php if ($item_veiculo->revisao == 1 or $item_veiculo->revisao == true): ?> 
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Sim</a>
                                    <?php else: ?>
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Não</a>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <?php if ($item_veiculo->sinistro == 1 or $item_veiculo->sinistro == true): ?> 
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Sim</a>
                                    <?php else: ?>
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Não</a>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <?php if ($item_veiculo->roubo_furto == 1 or $item_veiculo->roubo_furto == true): ?> 
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Sim</a>
                                    <?php else: ?>
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Não</a>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <?php if ($item_veiculo->aluguel == 1 or $item_veiculo->aluguel == true): ?> 
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Sim</a>
                                    <?php else: ?>
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Não</a>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <?php if ($item_veiculo->venda == 1 or $item_veiculo->venda == true): ?> 
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Sim</a>
                                    <?php else: ?>
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Não</a>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <?php if ($item_veiculo->particular == 1 or $item_veiculo->particular == true): ?> 
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Sim</a>
                                    <?php else: ?>
                                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem">Não</a>
                                    <?php endif ?>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->marca ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->fabricante ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->tipo ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->combustivel ?></a>
                                </td>

                                <td>
                                    <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->observacao ?></a>
                                </td>
                            </tr>

                        <?php endforeach ?>



                        <?php if (count($model->rows) == 0):?>

                            <tr>
                                <th scope="row">
                                    <td colspan="16">Nenhum registro foi encontrado.</td>
                                </th>
                            </tr>

                        <?php endif?>
                    </tbody>
                </table>
            </div>

        </div>

        <style>
            .botao-detalhar
            {
                display: flex;
                justify-content: center;
                background-color: rgba(0,0,0,0);
            }

            .modal-detalhes
            {
                display: none; 
                position: fixed; 
                z-index: 1; 
                left: 0;
                top: 0;
                width: 100%; 
                height: 100%; 
                overflow: hidden; 
                background-color: rgba(0,0,0,1);
            }

            .modal-detalhes-content 
            {
                background-color: rgba(0,0,0,1);
                margin: 1% 1%; 
                padding: 20px;
                width: 100%;
                max-height: 98%;
                overflow-y: auto;
                overflow-x: scroll;
            }

            .close 
            {
                color: #FFFFFF;
                float: right;
                font-size: 28px;
                font-weight: bold;
                position: fixed;
            }

            .close:hover, .close:focus 
            {
                color: #C0C0C0;
                text-decoration: none;
                cursor: pointer;
            }

            .table 
            {
                overflow-x: scroll;
            }

        </style>

        <script>
            var modal = document.getElementById("modal-detalhes");

            var btn = document.getElementById("btn-detalhes");

            var span = document.getElementsByClassName("close")[0];

            btn.onclick = function() 
            {
                modal.style.display = "block";
            }

            span.onclick = function() 
            {
                modal.style.display = "none";
            }

            window.onclick = function(event) 
            {
                if (event.target == modal) 
                {
                    modal.style.display = "none";
                }
            }
        </script>


        <br><br>
        <div class="botoes-voltar">
            <button onclick="document.location='/'" class="pagInicial" style="margin-left: 1%;">Página Inicial</button>
            <button onclick="document.location='/veiculo/form'" class="cadMais" style="margin-left: 1%;">Cadastrar Mais</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>