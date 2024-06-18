<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand" href="#">
                <img src="https://cdn.univicosa.com.br/files/portal/logo/vertical_png.png" style="width:120px" alt="">
            </a>
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
                    <a class="nav-link" href="<?= base_url("/index.php/logout") ?>">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("/index.php/logout") ?>"><img src="https://th.bing.com/th/id/OIP.P3sfmVDrCAPD4AecplRrUgHaH_?w=192&h=207&c=7&r=0&o=5&pid=1.7" style="width:20px" alt=""></a>
                </li>
            </ul>
        </div>
    </nav>

    <title>Avaliacao</title>

</head>




<body class="text-bg-light p-3">

    <h2 align='center'> <?php echo $titulo ?></h2>

    <?php if (auth()->loggedIn()) : ?>
        <span><b>Olá <?php echo auth()->user()->username; ?></b></span>
        <?php endif; ?><?php ?>
        <br><br>

        <div class="container">
            <div class="row align-items-center">
                <div class="">

                    <form method="post">

                        <div class="col-sm-7">
                            <div class="">
                                <tr>
                                    <td>introducao:</td>
                                    <td><input class="form-control" type="text" name='introducao'></td><br><br>
                                </tr>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <tr>
                                <td>organizacao</td>
                                <td><input class="form-control" type="text" name='organizacao'></td><br><br>
                            </tr>
                        </div>

                        <div class="col-sm-7">
                            <tr>
                                <td>repeticoes</td>
                                <td><input class="form-control" type="text" name='repeticoes'></td><br><br>
                            </tr>
                        </div>

                        <div class="col-sm-7">
                            <tr>
                                <td><S></S>apresentacao</td>
                                <td><input class="form-control" type="text" name='apresentacao'></td><br><br>
                            </tr>
                        </div>

                        <div class="col-sm-7">
                            <tr>
                                <td><S></S>conclusao</td>
                                <td><input class="form-control" type="text" name='conclusao'></td><br><br>
                            </tr>
                        </div>

                        <div class="col-sm-7">
                            <tr>
                                <td><S></S>apresentacao</td>
                                <td><input class="form-control" type="text" name='tempoapresentacao'></td><br><br>
                            </tr>
                        </div>

                        <div class="col-sm-2">
                            <tr>
                                <td><input class="btn btn-primary" type="submit" value="<?php echo $acao ?>"></td><br><br>
                            </tr>

                        </div>


                    </form>
                </div>
            </div>

</body>

</html>