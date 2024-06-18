<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exibindo</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://cdn.univicosa.com.br/files/portal/logo/vertical_png.png" style="width:120px" alt="">
    </a>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url("/index.php") ?>">Inicio<span class="sronly"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/avaliacao") ?>">Avaliar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/ExibirAluno") ?>">Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/cadastro") ?>">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/ExibirAvaliacao") ?>">Avaliacões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/Submissao") ?>">Submeter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/verSubmissao") ?>">Artigos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/logout") ?>">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/index.php/logout") ?>"><img src="https://th.bing.com/th/id/OIP.P3sfmVDrCAPD4AecplRrUgHaH_?w=192&h=207&c=7&r=0&o=5&pid=1.7" style="width:20px" alt=""></a>
            </li>
        </ul>
    </div>
</nav>
<?php if (auth()->loggedIn()) : ?>
                <h1> Olá <?php echo auth()->user()->username; ?></a></h1>
            <?php endif; ?>

<body>
    <div class="container">

        <h1 align=center>Exibindo alunos</h1>

        <table class="table table-bordered">

            <tr>
                <th>Id</th>
                <th>nome</th>
                <th>email</th>
                <th>curso</th>
            </tr>

            <?php foreach ($informacoes as $informacao) : ?>
                <tr>
                    <td><?php echo $informacao['id'] ?></td>
                    <td><?php echo $informacao['nome'] ?></td>
                    <td><?php echo $informacao['email'] ?></td>
                    <td><?php echo $informacao['curso'] ?></td>
                    <td><?php echo $informacao['senha'] ?></td>
                </tr>
            <?php endforeach; ?>


        </table>
        <div class="d-flex justify-content-center">
            <?php echo $pager->links('default', 'paginacao_full') ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>