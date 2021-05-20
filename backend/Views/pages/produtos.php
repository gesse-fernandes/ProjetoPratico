<?php
include('includes/sidebar.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($id)) {
    if(\backend\Models\ProdutosModels::existeId($id))
    {
        $produtos = \backend\Models\ProdutosModels::selecionaId($id);
        
    }
    
?>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 mt-5">
                    <div class="jumbotron">
                        <h1 class="display-5">Editar de Produtos</h1>
                        <div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="idProd" value="<?php echo $produtos['id'] ?>" style="display: none;">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" value="<?php echo $produtos['nomeProduto']; ?>" class="form-control" id="nome">

                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao"  id="descricao" rows="3" placeholder="Uma descrição do produto"><?php echo $produtos['descricao'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="preço">Preço R$</label>
                                    <input type="number" value="<?php echo $produtos['preco'] ?>" class="form-control" name="preco" id="preco" min="2.0" step="0.20">
                                </div>
                                <div class="form-group">
                                    <label for="imagem">Fazer upload de imagem</label>
                                    <input type="file" class="form-control-file" value="<?php echo INCLUDE_PATH ?>uploads/<?php echo $produtos['imagem'];?>" name="imagem" id="imagem">
                                    <small class="text-danger">Tamanho máximo: 16MB</small>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Editar" name="acao" class="btn btn-primary" />
                                </div>
                                <input type="hidden" name="editar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
} else {
?>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 mt-5">
                    <div class="jumbotron">
                        <h1 class="display-5">Cadastro de Produtos</h1>
                        <div>
                            <form method="post" enctype="multipart/form-data">
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
}

?>



<?php

include('includes/footer.php');
?>