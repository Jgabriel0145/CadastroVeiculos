<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <table>
        <thead>
            <th>#</th>
            <th>ID</th>
            <th>Nome</th>
        </thead>
            

        <tbody>
            <?php foreach($model->rows as $item): ?>

                <tr>
                    <td>
                        <a href="/tipo/delete?id=<?= $item->id ?>">X</a>
                    </td>

                    <td><a><?= $item->id ?></a></td>

                    <td>
                        <a href="/tipo/form?id=<?= $item->id ?>"><?= $item->tipo ?></a>
                    </td>
                </tr>

            <?php endforeach ?>



            <?php if (count($model->rows) == 0):?>

                <tr>
                    <td colspan="5">Nenhum registro foi encontrado.</td>
                </tr>

            <?php endif?>
        </tbody>
    </table>

    <br><br>
    <button onclick="document.location='/'" >Voltar</button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>