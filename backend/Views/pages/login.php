<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>/estilos/style.css">
    <title>Login</title>
</head>

<body>
    <section id="login">
        <div class="jumbotron">
            <h1 class="display-4">Login Sistema de Produtos</h1>
            <form class="mt-5" method="POST">
                <div class="form-group">
                    <label for="usuario">Login</label>
                    <input name="login" type="text" class="form-control" id="usuario" placeholder="login">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Sua senha">
                </div>
                <div>
                    <span>Não possui conta? Cadastre-se <a href="usuario">aqui</a></span>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="acao" class="btn btn-success">Entrar</button>
                </div>
                <input type="hidden" name="login">
            </form>
        </div>
    </section>
</body>

</html>