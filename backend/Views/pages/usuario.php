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
            <h1 class="display-4">Realizar Cadastro</h1>
            <form class="mt-5" method="POST" onsubmit="return valida();">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="email" placeholder="nome..">
                    <small id="nomeHelp" style="display: none;  font-size: 20px;" class=" nome text-white">Informe o seu nome Obrigatório</small>

                </div>
                <div class="form-group">
                    <label for="login">Nome do login</label>
                    <input type="text" class="form-control" name="login" id="t" placeholder="nome do login">
                    <small id="nomeHelp" style="display: none;  font-size: 20px;" class=" login text-white">Informe o seu login Obrigatório</small>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha">
                    <small id="nomeHelp" style="display: none;  font-size: 20px;" class=" senha text-white">Informe o sua senha Obrigatorio</small>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" name="acao" class="btn btn-success" value="Cadastrar">
                </div>
                <input type="hidden" name="registrar" value="registrar">
            </form>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>