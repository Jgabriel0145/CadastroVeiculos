<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php include 'list-style.php'; ?>


<body>
<div>
<h1>Listagem de Veiculos</h1><br><br>
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
                <th scope="col">Obs.</th>
                <th scope="col">Marca</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Tipo</th>
                <th scope="col">Combustível</th>
            </tr>
        </thead>
  
        <tbody>
            <?php foreach($model->rows as $item_veiculo): ?>
                <tr>
                    <th scope="row">
                        <a class="btn-excluir" href="/combustivel/delete?id=<?= $item_veiculo->id ?>">Excluir(X)</a>
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
                        <a href="/veiculo/form?id=<?= $item_veiculo->id ?>" class="nome-listagem"><?= $item_veiculo->observacao ?></a>
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
                </tr>

            <?php endforeach ?>



            <?php if (count($model->rows) == 0):?>

                <tr>
                    <th scope="row">
                        <td colspan="5">Nenhum registro foi encontrado.</td>
                    </th>
                </tr>

            <?php endif?>
        </tbody>
    </table>


    <br><br>
    <button onclick="document.location='/'" class="btn btn-primary" style="margin-left: 1%;">Voltar</button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>