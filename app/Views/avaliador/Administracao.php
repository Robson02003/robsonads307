<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1 align="center">Página de Administração</H1>
    <?php if (auth()->loggedIn()) : ?>
        <span>olá </span><?php echo auth()->user()->username; ?>
    <?php endif; ?>
</body>

</html>