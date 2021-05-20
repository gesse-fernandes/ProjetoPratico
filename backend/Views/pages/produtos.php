<?php
include('includes/sidebar.php');
?>

<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 mt-5">
                <div class="jumbotron">
                    <h1 class="display-5">Cadastro de Produtos</h1>
                    <div>
                        <form  method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome">

                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Uma descrição do produto"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="preço">Preço R$</label>
                                <input type="number" class="form-control" name="preco" id="preco" min="2.0" step="0.20">
                            </div>
                            <div class="form-group">
                                <label for="imagem">Fazer upload de imagem</label>
                                <input type="file" class="form-control-file" name="imagem" id="imagem">
                                <small class="text-danger">Tamanho máximo: 16MB</small>
                            </div>
                            <div class="d-flex justify-content-end">
                                <input type="submit" value="Cadastrar" name="acao" class="btn btn-primary" />
                            </div>
                                <input type="hidden" name="cadProd">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php

include('includes/footer.php');
?>