<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Projeto Pratico</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="<?php echo INCLUDE_PATH; ?>">Logo Marca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuNavbar" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="MenuNavbar">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Exibir Produtos</a>
                    </li>
                    <?php 
                     if(isset($_SESSION['login']))
                     {
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href='produtos'>cadastrar Produtos</a>
                    </li>
                    <li class="nav-item" >
                         <a class='nav-link'  href='<?php echo INCLUDE_PATH ?>?loggout'>loggout</a>
                    </li>
                    <?php
                     }else{
                         ?>
                         <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <?php
                     }
                    ?>
                   
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST" action="index.php">
                    <input class="form-control mr-sm-2" name="pesquisar" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-success my-2 my-sm-0" " type=" submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>