<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Marcas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php include 'list-style.php'; ?>

<body>

<div>
<h1>Listagem de Marca</h1><br><br>
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
  
        <tbody>
            <?php foreach($model->rows as $item): ?>
                <tr>
                    <th scope="row">
                        <a class="btn-excluir" href="/marca/delete?id=<?= $item->id ?>">Excluir(X)</a>
                    </th>

                    <td>
                        <a href="/marca/form?id=<?= $item->id ?>" class="nome-listagem"><?= $item->marca ?></a>
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